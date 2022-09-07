
import java.util.Scanner;


public class Exercicio__02 {

    public static void main(String[] args) {
        int M = 0, m = 0, n1;
        Scanner tec = new Scanner(System.in);
        System.out.println("Insira quantidade de valores desejado: ");
        n1 = tec.nextInt();
        int vet[] = new int [n1];
        System.out.println("Insira valoes desejados: ");
        for(int j = 0; j < n1; j++){
            vet[j] = tec.nextInt();
        }
        M = Maior(vet, M, n1);
        m = Menor(vet, m, n1);
        System.out.println("Maior número: " + M + "\nMenor número: " + m);
    }
    public static int Maior(int[]vet, int M, int n){
        for(int i = 0; i < n; i++){
            if(i == 0){
                M = vet[i];
            }
        }
    return M;
    }
    public static int Menor(int[] vet, int m, int n){
        for(int j = 0; j < n; j++){
            if(j == 0){
                m = vet[j];
            }
            if(vet[j] < m){
                m = vet[j];
            }
        }
        return m;
    }
}
