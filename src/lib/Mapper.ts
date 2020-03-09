import { ObjectId } from 'mongodb'

export type ReplaceType<T, FROM, TO> = Exclude<T, FROM> | TO

export type DbType<T, TKeys extends keyof T> = {
  [K in keyof T]: K extends TKeys ?
  (T[K] extends string[] ? ReplaceType<T[K], string[], ObjectId[]> : ReplaceType<T[K], string, ObjectId>) :
  T[K]
}

export const createPlainToDbMapper = (keysToMap: string[]) => (obj: { [key: string]: any }): any => {
  if (!obj) {
    return obj
  }
  return keysToMap.reduce(
    (acc, key) => {
      if (obj[key] !== undefined && obj[key] !== null) {
        acc[key] = new ObjectId(obj[key])
      }
      return acc
    },
    { ...obj }
  )
}

export const createDbToPlainMapper = <T>(keysToMap: (keyof T)[]) => (obj: { [key: string]: any }): any => {
  if (!obj) {
    return obj
  }
  return keysToMap.reduce(
    (acc, key: any) => {
      if (obj[key] !== undefined && obj[key] !== null) {
        acc[key] = obj[key].toString()
      }
      return acc
    },
    { ...obj }
  )
}
