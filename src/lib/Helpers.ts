import crypto from 'crypto'
import fs from 'fs'
import { encode, decode } from 'jwt-simple'
import moment from 'moment'
import { Logger } from './Logger'

/**
 * Helpers
 * Class
 */
export class Helpers {
  private algorithm: string
  private hash: string
  private secret: string
  private iv: Buffer

  /**
   * constructor
   */
  // tslint:disable-next-line: space-before-function-paren
  constructor() {
    this.algorithm = 'aes-256-cbc'
    this.hash = 'mYCE2YFy034ncm1Qf8JqN60c61a7poOP'
    this.secret =
      '190ui9dk1w2ksl10=owe1kw9d1u8dey18gwe12jw9diw0-uer1g2uh8ydg1d127h'
    this.iv = Buffer.from('PbnzHwwF0Zo77vqQ')
  }

  /**
   * _getRandomInt
   * @param {Number} min
   * @param {Number} max
   */
  public _getRandomInt(min: number, max: number) {
    return Math.floor(Math.random() * (max - min + 1)) + min
  }

  /**
   * checkBasicFolders
   * Create basic folders for project
   */
  // tslint:disable-next-line: space-before-function-paren
  public checkBasicFolders() {
    const folders = []
    try {
      for (let i = 0; i < folders.length; i++) {
        if (!fs.existsSync('./' + folders[i])) {
          fs.mkdirSync('./' + folders[i])
        }
      }
    } catch (error) {
      Logger.error(`Helpers.checkBasicFolders`, error)
    }
  }

  /**
   * decrypt
   * @param {String} text
   * @return {String} text
   */
  public decrypt(text: string): string {
    const decipher = crypto.createDecipheriv(this.algorithm, this.hash, this.iv)
    let dec = decipher.update(text, 'hex', 'utf8')
    dec += decipher.final('utf8')
    return dec
  }

  /**
   * encrypt
   * @param {String} text
   * @return {String} text
   */
  public encrypt(text: string): string {
    const cipher = crypto.createCipheriv(this.algorithm, this.hash, this.iv)
    let crypted = cipher.update(text, 'utf8', 'hex')
    crypted += cipher.final('hex')
    return crypted
  }

  /**
   * randomString
   * @param {Number} len
   * @return {String} string
   */
  public randomString(len: number): string {
    const date = new Date()
    const buf = []
    const chars =
      'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789' +
      date.getTime()
    const charlen = chars.length
    for (let i = 0; i < len; ++i) {
      buf.push(chars[this._getRandomInt(0, charlen - 1)])
    }
    return buf.join('')
  }

  /**
   * replaceAll
   * @param {String} value
   * @param {String} search
   * @param {String} replace
   * @return {String} value
   */
  public replaceAll(value: string, search: string, replace: string): string {
    let newValue = value
    for (let i = newValue.length - 1; i >= 0; i--) {
      newValue = newValue.replace(search, replace)
    }
    return newValue
  }

  /**
   * createJWT
   * @param {Object} sub
   * @return {String} token
   */
  public createJWT(sub: any): string {
    const payload = {
      sub: sub,
      iat: moment().unix(),
      exp: moment()
        .add(1, 'hours')
        .unix()
    }
    return encode(payload, this.secret)
  }

  /**
   * ensureAuthenticateJWT
   * @param {Object} req
   * @param {Object} res
   * @param {Object} next
   */
  public ensureAuthenticateJWT(req: any, res: any, next: any) {
    try {
      const userToken = req.header('Authorization') || req.query.t
      const secret =
        '190ui9dk1w2ksl10=owe1kw9d1u8dey18gwe12jw9diw0-uer1g2uh8ydg1d127h'
      if (!userToken) {
        res.status(401).send({
          message: 'Access not authorized!'
        })
      } else {
        const token = userToken.split(' ')[1]
        let payload = null
        payload = decode(token, secret)
        if (payload.exp <= moment().unix()) {
          res.status(401).send({
            message: 'Token expired'
          })
        }
        req.authClient = payload.sub
        next()
      }
    } catch (error) {
      res.status(401).send({
        message: error.message
      })
    }
  }

  public getDaysAfterDate(date: Date): number {
    const today = new Date()
    const diffTime = today.getTime() - date.getTime()
    return diffTime / ((1000 * 3600) * 24)
  }
}
