package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        System.out.println("Iveskite du skaicius:");

        double sk1 = scanner.nextInt();
        double sk2 = scanner.nextInt();

        System.out.println("Pasirinkite operacijos tipa: suma - 1, atimtis - 2, daugyba - 3, dalyba - 4");

        double op = scanner.nextInt();

        Duomenys duomenys = new Duomenys();

        double sum = duomenys.suma(sk1, sk2);
        double atm = duomenys.atimtis(sk1, sk2);
        double daug = duomenys.sandauga(sk1, sk2);
        double dal = duomenys.dalyba(sk1, sk2);

        if (op == 1) {
            System.out.println(sum);
        } else if (op == 2) {
            System.out.println(atm);
        } else if (op == 3) {
            System.out.println(daug);
        } else if (op == 4) {
            System.out.println(dal);
        } else {
            System.out.println("Tokios operacijos nera");
        }
    }
}
