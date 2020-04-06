import { Response, Request, Router } from 'express'
import { SendMailController } from '../controllers/sendMailController'
import { Logger } from '../../lib/Logger'

export class sendMailRouter {
  public r: Router

  constructor() {
    this.r = Router()
    const controller = new SendMailController()
    this.r.route('/sendmail')
      .post(async (req: Request, res: Response) => {
        try {
          const messageId = await controller.sendMail(req.body.name, req.body.email, req.body.phone, req.body.message)
          res.status(200).json({
            message: 'Success',
            messageId
          })
        } catch (error) {
          Logger.error(`api.sendmail`, error)
        }
      })
  }
}