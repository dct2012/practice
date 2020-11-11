import scala.io.StdIn.readLine

object ChefAndEasyQueries extends App {
  def run(): Unit = {
    val firstLine = readLine().split(" ")
    val daysUntilNone = firstLine(0).toInt
    val maxQueriesPerDay = firstLine(1).toInt
    println("Days until no queries: " + daysUntilNone)
    println("Number of queries that can be handled per day: " + maxQueriesPerDay)

    val numberOfQueriesPerDay = readLine().split(" ")
    println(numberOfQueriesPerDay.mkString(" "))

    val day = 0

    for(day <- 1 to daysUntilNone) {

    }

    println(day)
  }

  for (testCase <- 1 to readLine().toInt) {
    run()
  }
}
