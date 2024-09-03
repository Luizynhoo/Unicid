#include <stdio.h>

void main() {
        int numero = 0;

    printf("Informe o número desejado: ");
    scanf("%d", &numero);
    printf("\nO antecessor: %.d", numero-1);
    printf("\nO sucessor: %.d\n", numero+1);

    return 0;
}
