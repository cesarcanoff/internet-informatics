package br.edu.ifms.controladores;

import br.edu.ifms.entidades.UtilitarioSoma;
import java.util.ArrayList;
import java.util.Scanner;

public class ControladorPrincipal {

    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);

        UtilitarioSoma ut_soma = new UtilitarioSoma();

        float n1, n2;

        // Usando a assinatura - soma(int n1, int n2)
        System.out.println("=-=-=-=-=-= Int com Int =-=-=-=-=-=");
        System.out.println("Informe os valores para a SOMA: ");
        n1 = sc.nextInt();
        n2 = sc.nextInt();
        System.out.println("A soma é: " + ut_soma.soma((int) n1, (int) n2)); // Usando Cast - (Int)

        // Usando a assinatura - soma(float n1, int n2) 
        System.out.println("=-=-=-=-=-= Float com Int =-=-=-=-=-=");
        System.out.println("Informe os valores para a SOMA: ");
        n1 = sc.nextFloat();
        n2 = sc.nextInt();
        System.out.println("A soma é: " + ut_soma.soma(n1, (int) n2)); // Usando Cast - (Int)

        // Usando a assinatura - soma(float n1, float n2)
        System.out.println("=-=-=-=-=-= Float com Float =-=-=-=-=-=");
        System.out.println("Informe os valores para a SOMA: ");
        n1 = sc.nextFloat();
        n2 = sc.nextFloat();
        System.out.println("A soma é: " + ut_soma.soma(n1, n2));

        // Usando a assinatura - somar(int[] v1, int[] v2)
        System.out.println("=-=-=-=-=-= Vetor[int] com Vetor[int] =-=-=-=-=-=");
        int v1[] = new int[2];
        int v2[] = new int[2];
        System.out.println("Informe os valores para a SOMA: ");
        v1[0] = sc.nextInt();
        v2[0] = sc.nextInt();
        System.out.println("A soma é: " + ut_soma.soma(v1[0], v2[0]));

        // Usando a assinatura - soma(ArrayList<Integer> v1, ArrayList<Integer> v2)
        System.out.println("=-=-=-=-=-= ArrayList[int] com ArrayList[int] =-=-=-=-=-=");
        ArrayList<Integer> vl1 = new ArrayList<>();
        ArrayList<Integer> vl2 = new ArrayList<>();
        ArrayList<Integer> result = new ArrayList<>();
        System.out.println("Informe os 2 valores para a soma: ");
        int a1 = sc.nextInt();
        int a2 = sc.nextInt();
        vl1.add(a1);
        vl2.add(a2);
        
        System.out.println("A soma é: " + ut_soma.soma(vl1, vl2));
        
    }

}
