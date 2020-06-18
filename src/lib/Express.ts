import bodyParser from 'body-parser'
import compression from 'compression'
import cors from 'cors'
import express from 'express'
import helmet from 'helmet'
import methodOverride from 'method-override'
import { MailSender } from './MailSender'
import { Ticks } from './Ticks'
import { sendMailRouter } from '../app/routers/sendMailRouter'

export class Express {
  public port: number
  public app: any

  constructor() {
    const app = express()
    this.port = parseInt(process.env.NODE_PORT, 10) || 80
    app.set('view engine', 'pug')
    app.set('views', './public/views')
    app.set('port', this.port)
    app.use(express.static('./public'))
    app.use(bodyParser.urlencoded({ limit: '1024mb', extended: true }))
    app.use(bodyParser.json({ limit: '1024mb' }))
    app.use(methodOverride())
    app.use(cors())
    app.use(helmet())
    app.use(compression())
    app.use('/api', new sendMailRouter().r)
    const mailSender = new MailSender()
    mailSender.testConnectingMailServer()
    const ticks = new Ticks()
    ticks.init()
    this.app = app
  }
}
