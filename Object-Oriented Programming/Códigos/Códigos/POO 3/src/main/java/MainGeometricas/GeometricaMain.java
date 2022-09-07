package MainGeometricas;

import FormasGeométricas.Circulo;
import FormasGeométricas.Retangulo;
import FormasGeométricas.Square;
import java.util.Scanner;

public class GeometricaMain {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        Square quadrado = new Square();
        Circulo circulo = new Circulo();
        Retangulo retangulo = new Retangulo();

        System.out.println("-------------------- MENU --------------------");
        System.out.println("1 - Calcular ÁREA e PERÍMETRO do QUADRADO:");
        System.out.println("2 - Calcular ÁREA e PERÍMETRO do RETÂNGULO: ");
        System.out.println("3 - Calcular ÁREA e PERÍMETRO do CÍRCULO: ");
        System.out.println("4 - Sair do sistema: ");
        System.out.println("----------------------------------------------");
        System.out.println("ESCOLHA [1, 2, 3, 4] = ");
        String escolha = sc.next();
        switch (escolha) {
            case "1":
                System.out.println("---------- QUADRADO ----------");
                System.out.println("Insira o valor do LADO para o cálculo da ÁREA e o PERÍMETRO: ");
                double ladoQ = sc.nextDouble();
                System.out.println("A área do quadrado é:" + quadrado.calcularArea(ladoQ));
                System.out.println("O PERÍMETRO do quadrado é: " + quadrado.calcularPeri(ladoQ));
                System.out.println("------------------------------------------------------------------");
                break;
            case "2":
                System.out.println("---------- RETÂNGULO ----------");
                System.out.println("Insira os valores dos LADOS desejado para o cálculo da ÁREA e do PERÍMETRO: ");
                double ladoR = sc.nextDouble();
                double ladoR2 = sc.nextDouble();
                System.out.println("A ÁREA do retângulo é: " + retangulo.calcularArea(ladoR, ladoR2));
                System.out.println("O PERÍMETRO do retângulo é: " + retangulo.calcularPeri(ladoR, ladoR2));
                System.out.println("------------------------------------------------------------------");
                break;
            case "3":
                System.out.println("---------- CÍRCULO ----------");
                System.out.println("Insira o valor do RAIO desejado para o cálculo da ÁREA e do PERÍMETRO: ");
                double ladoC = sc.nextDouble();
                System.out.println("O valor da ÁREA do círculo é: " + circulo.calcularArea(ladoC));
                System.out.println("O valor do PERÍMETRO do círculo é: " + circulo.calcularPeri(ladoC));
                System.out.println("------------------------------------------------------------------");
                break;
            case "4":
                System.out.println("Saiu do sistema com sucesso");
            default:
                System.out.println("[ERRO] Por favor insira um valor entre os permitidos [1, 2, 3]");
        }
    }
}
