export enum ContactType {
  WHATSAPP = 'whatsApp',
  EMAIL = 'email',
  PHONE = 'phone',
  CELLPHONE = 'cellPhone'
}

export interface Contact {
  type: string
  name: string
  value: string
}
