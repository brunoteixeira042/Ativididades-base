import os;

restaurantes = [{'nome':'rest','categoria':'japones','ativado':False}]

def nome_app():
    print('𝐒𝐚𝐛𝐨𝐫 𝐄𝐱𝐩𝐫𝐞𝐬𝐬 \n')

def exibir_opcao():
    print('1. Cadastrar Restaurantes')
    print('2. Listar Restaurante')
    print('3. Alternar estado do Restaurante')
    print('4. Sair \n')


def finalizar_app():
   exibir_subtitulo('Finalizando...')


def opcao_invalida():
    exibir_subtitulo('Opção não é válida')
    volta_menu()
    

def exibir_subtitulo(subtitulo):
    os.system('cls')
    print(subtitulo)

def volta_menu():
    input('Clique em qualquer tecla para voltar o menu: \n')
    main()

def cadastrar_restaurante():
    exibir_subtitulo('Cadastro de novos restaurantes: \n')
    nome = input('Digite o nome do Restaurante: ')
    categoria = input('Digite a categoria: ')
    ativado = False
    restaurante = {'nome': nome,'categoria': categoria,'ativado': ativado}
    restaurantes.append(restaurante)
    volta_menu()

def listar_restaurante():
    for restaurante in restaurantes:
        nome = restaurante['nome']
        categoria = restaurante['categoria']
        ativado = restaurante['ativado']
        print(f'Nome:{nome}, categoria:{categoria},  ativado:{ativado}')
    volta_menu()

def alterar_estado():
    exibir_subtitulo('Alterar estado do restaurante')
    nome_restaurante = input('Digite o nome do restaurante deseja alterar o estado: ')
    restaurante_encontrado = False
    for restaurante in restaurantes:
        restaurante_encontrado = True
        if nome_restaurante == restaurante['nome']:
            restaurante['ativado'] = not restaurante['ativado']
            mensagem = f'o restaurante {nome_restaurante} foi ativado' if restaurante['ativado'] else f'o {nome_restaurante}restaurante desativado'
            print(mensagem)

    if restaurante_encontrado:
        print('Restaurante não existe')
    
    volta_menu()


def escolher_opcao():
    try:
        escolha_opcao = int(input('Escolha a opção: '))
        if escolha_opcao==1:
            cadastrar_restaurante()
        elif escolha_opcao== 2:
           listar_restaurante()
        elif escolha_opcao== 3:
            alterar_estado()
        elif escolha_opcao== 4:
            finalizar_app()  
        else:
            opcao_invalida()
    except:
        opcao_invalida()       

def main():
    os.system('cls')
    nome_app()
    exibir_opcao()
    escolher_opcao()


if __name__ == '__main__':
    main()