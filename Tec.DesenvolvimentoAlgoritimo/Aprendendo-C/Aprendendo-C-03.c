
#include <stdio.h>

//Int = numero inteiro
int main() {
        //Criando as variaveis
        float salario = 0;
        float aumento = 0;
    
    printf("Informe o seu salario: R$");
    //Armazenando a informação (salario) do usuario
    scanf("%f", &salario);
    printf("Informe a porcentagem de aumento do seu salario: ");
    scanf("%f", &aumento );
    //Utilizando matematica para a logica, conversão da porcentagem
    aumento = aumento*salario/100;
    salario = salario+aumento;

    printf("\nO seu salario aumentou: R$%.2f ", aumento);
    printf("\nO seu salario agora e: R$%.2f\n ", salario);

    return 0;
}

