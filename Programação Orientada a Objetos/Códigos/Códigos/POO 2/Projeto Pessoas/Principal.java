package Proj_Pessoas;

import java.util.Scanner;

public class Principal {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);

		PessoaFisica p1 = new PessoaFisica();
		PessoaJuridica p2 = new PessoaJuridica();

		System.out.println("[ 1 ] - Informar dados para o objeto Pessoa Física: \n"
				+ "[ 2 ] - Informar dados para o objeto Pessoa Jurídica: ");
		System.out.print("ESCOLHA: ");
		int opcao = sc.nextInt();
		switch (opcao) {
		case 1:
			System.out.println("Informe NOME e CPF para Pessoa Física: ");
			String nome_pf = sc.next();
			String cpf_pf = sc.next();
			p1.setNome(nome_pf);
			p1.setCpf(cpf_pf);
			System.out.printf("O NOME informado foi %s e o CPF foi: %s.", p1.getNome(), p1.getCpf());
			break;
		case 2:
			System.out.println("Informe NOME e CNPJ para a Pessoa Jurídica: ");
			String nome_pj = sc.next();
			String cnpj_pj = sc.next();
			p2.setNome(nome_pj);
			p2.setCnpj(cnpj_pj);
			System.out.printf("O NOME informado foi: %s e o CNPJ foi: %s", p2.getNome(), p2.getCnpj());
		}

	}
}
