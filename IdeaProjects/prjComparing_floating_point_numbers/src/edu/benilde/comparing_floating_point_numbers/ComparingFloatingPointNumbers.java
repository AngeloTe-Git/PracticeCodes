package edu.benilde.comparing_floating_point_numbers;

public class ComparingFloatingPointNumbers {

    public static void main(String[] args)
    {
        double x = 1.00;
        double y = 3.0D / 7.0D + 2.0D / 7.0D + 2.0D / 7.0D;

        System.out.println("3.0 / 7.0 + 2.0 / 7.0 + 2.0 / 7.0 = " + (3.0 / 7.0 + 2.0 / 7.0 + 2.0 / 7.0));
        System.out.println("x = " + x);
        System.out.println("y = " + y + "\n");

        if (x == y)
            System.out.println("x and y are the same.\n");
        else
            System.out.println("x and y are not the same.\n");

        if (Math.abs(x - y) < 0.000001)
            System.out.println("x and y are the same within the " + "tolerance of 0.000001.\n");
        else
            System.out.println("x and y are not the same within " + "the tolerance of 0.000001.\n");
    }
}
