import { MailSender } from './MailSender'
import { NodeMailerResponse } from './types/utils/NodeMailerResponse'
import { Logger } from './Logger'

export class Notifications {
  private mailSender: MailSender

  async createNotificationRecoverPasswordByEmail(to: string, newPassword: string): Promise<NodeMailerResponse> {
    try {
      this.mailSender = new MailSender()
      const message = `Foi solicitado a recuperação da sua senha via e-mail, segue sua nova senha: <b>${newPassword}</b>`
      return await this.mailSender.sendHtml(to, 'Meugasja - recuperação de senha', message, [])
    } catch (error) {
      Logger.error(`Notifications.createNotificationRecoverPasswordByEmail`, error)
    }
  }
}
