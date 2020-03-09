export class Logger {
  public static error(message: string, error: Error): void {
    console.error(message, error)
  }

  public static info(message: string): void {
    console.info(message)
  }
}
