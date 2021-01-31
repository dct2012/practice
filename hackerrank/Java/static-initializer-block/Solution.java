import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class Solution {

    private static Scanner sc = new Scanner(System.in);
    private static boolean flag = true;
    private static int B = getDimension();
    private static int H = getDimension();

    private static int getDimension() {
        int d = sc.nextInt();
        if (flag && d <= 0) {
            flag = false;
            System.out.println("java.lang.Exception: Breadth and height must be positive")
        }
        return d;
    }

    public static void main(String[] args) {
        if (flag) {
            int area = B * H;
            System.out.print(area);
        }

    }
}
