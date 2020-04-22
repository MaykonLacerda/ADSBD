import { MailSender } from '../../lib/MailSender'
import { NodeMailerResponse } from '../../lib/types/utils'

export class SendMailController {

  public sendMail(name: string, email: string, phone: string, message: string): Promise<NodeMailerResponse> {
    const mail = new MailSender()
    const messageHtml = `Contato pelo website: <br />
    Nome: ${name}<br />
    E-mail: ${email} <br />
    Telefone: ${phone}<br />
    <p>${message}</p>
    `
    return mail.sendHtml('', 'Contato via website', messageHtml, [])
  }
}