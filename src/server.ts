import http from 'http'
import { Express } from './lib/Express'
import { Logger } from './lib/Logger'

const express = new Express()
const serverHttp = http.createServer(express.app)
serverHttp.listen(express.port, () => {
  Logger.info(`Express Server listen: ${express.port}`)
})