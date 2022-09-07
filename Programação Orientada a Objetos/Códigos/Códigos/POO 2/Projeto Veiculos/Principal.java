
package Proj_Veiculos;

import java.util.Scanner;

public class Principal {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		Automovel carro = new Automovel();
		Motocicleta moto = new Motocicleta();

		System.out.println(
				"[ 1 ] - Informar dados para o Objeto CARRO: \n" + "[ 2 ] - Informar dados para o objeto MOTO: ");
		System.out.print("Escolha: ");
		int opcao = sc.nextInt();
		switch (opcao) {
		case 1:
			System.out.println("Informe a PLACA e a COR do AUTOMOVEL: ");
			String placa_c = sc.next();
			carro.setPlaca(placa_c);
			String cor_c = sc.next();
			carro.setCor(cor_c);
			System.out.printf("A PLACA informada é: %s e a COR é %s.", carro.getPlaca(), carro.getCor());
			break;
		case 2:
			System.out.println("Informe a PLACA e o MODELO da MOTOCICLETA: ");
			String placa_m = sc.next();
			moto.setPlaca(placa_m);
			String modelo_m = sc.next();
			moto.setModelo(modelo_m);
			System.out.printf("A PLACA informada para a MOTOCICLETA foi: %s e o MODELO foi: %s.", moto.getPlaca(), moto.getModelo());
			break;
			default:
				System.out.println("Por Favor, insira uma OPÇÃO válida [1/2].");
		}
	}
}