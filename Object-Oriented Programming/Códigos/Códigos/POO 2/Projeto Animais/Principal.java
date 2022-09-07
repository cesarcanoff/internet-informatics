package Proj_Animais;

import java.util.Scanner;

public class Principal {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		Ave av1 = new Ave();
		Mamifero m1 = new Mamifero();

		System.out.println(
				"[ 1 ] - Inserir dados para o objeto AVE; \n" + "[ 2 ] - Inserir dados para o objeto MAMÍFERO; \n");
		System.out.print("ESCOLHA: ");
		int opcao = sc.nextInt();
		// Eu preferi usar Switch/case para "organizar" o código.
		switch (opcao) {
		case 1:
			System.out.println("Informe o NOME da AVE: ");
			String nome_ave = sc.next();
			av1.setNome(nome_ave);
			System.out.println("Informe o COMPRIMENTO (cm) e PESO (Kg) da AVE: ");
			float comp_ave = sc.nextFloat();
			float peso_ave = sc.nextFloat();
			av1.setPeso(peso_ave);
			av1.setTamanho(comp_ave);
			System.out.printf(
					"O NOME informado para a AVE foi %s, o COMPRIMENTO informado foi: %.2f e o PESO informado foi: %.2f",
					av1.getNome(), av1.getTamanho(), av1.getPeso());
			break;
		case 2:
			System.out.println("Informe o NOME do MAMÍFERO: ");
			String nome_m = sc.next();
			m1.setNome(nome_m);
			System.out.println("Informe a COR e a idade do MAMÍFERO: ");
			String cor_m = sc.next();
			int idade_m = sc.nextInt();
			m1.setCor(cor_m);
			m1.setIdade(idade_m);
			System.out.printf("O NOME informado para o mamífero foi: %s, a COR foi: %s e a IDADE foi: %d", m1.getNome(),
					m1.getCor(), m1.getIdade());
			break;
		default:
			System.out.printf("Por Favor insira uma OPÇÃO válida [1/2].");
		}
	}
}
