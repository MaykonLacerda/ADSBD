import { Helpers } from './Helpers'

export const version = '3.0.0'
export const randomUserImage = () => {
  const helper = new Helpers()
  const i = helper._getRandomInt(1, 8)
  return `assets/img/user${i}-128x128.jpg`
}
