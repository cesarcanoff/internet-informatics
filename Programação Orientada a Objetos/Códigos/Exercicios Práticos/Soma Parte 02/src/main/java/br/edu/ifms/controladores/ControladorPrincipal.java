package br.edu.ifms.controladores;

import br.edu.ifms.entidades.UtilitarioSoma;
import java.util.Scanner;

public class ControladorPrincipal {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        // Objetos <Int>
        UtilitarioSoma<Integer> somadorInt = new UtilitarioSoma<>();
        UtilitarioSoma<Integer> somadorInt2 = new UtilitarioSoma<>();

        // Objetos <Float>
        UtilitarioSoma<Float> somadorFloat = new UtilitarioSoma<>();
        UtilitarioSoma<Float> somadorFloat2 = new UtilitarioSoma<>();

        // Entrada Float...
        System.out.println("Informe os valores para a soma: ");
        float nb1 = sc.nextFloat();
        float nb2 = sc.nextFloat();
        somadorFloat.setN1(nb1);
        somadorFloat2.setN2(nb2);
        float somaInt = somadorFloat.getN1() + somadorFloat2.getN2();
        System.out.println("A soma é <Int>: " + somaInt); // Float

        // Entrada Int...
        System.out.println("Informe os valores para a soma: ");
        int n1 = sc.nextInt();
        int n2 = sc.nextInt();
        somadorInt.setN1(n1);
        somadorInt2.setN2(n2);
        int somaFloat = somadorInt.getN1() + somadorInt2.getN2();
        System.out.println("A soma é <Float>: " + somaFloat); // Int...
    }
}


