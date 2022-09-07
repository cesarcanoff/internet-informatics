package br.edu.ifms.entidades;
import java.util.ArrayList;

public class UtilitarioSoma {

    public int soma(int n1, int n2) {
        return (n1 + n2);
    }

    public int soma(float n1, int n2) {
        return ((int) n1 + n2);
    }

    public float soma(float n1, float n2) {
        return (n1 + n2);
    }

    public int somar(int[] v1, int[] v2) {

        int soma = 0;

        for (int i = 0; i < v1.length; i++) {

            soma = soma + (v2[i] + v1[i]);

        }
        return soma;
    }

    public ArrayList<Integer> soma(ArrayList<Integer> v1, ArrayList<Integer> v2) {

        ArrayList<Integer> result = new ArrayList<>();

        for (int i = 0; i < v1.size(); i++) {
            result.add(v1.get(i) + v2.get(i));
        }
        return result;
    }
}


