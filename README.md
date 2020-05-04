<p align="center">
    <img width="400" height="200" src=".github/logo.png" title="Logo do projeto"><br />
    <img src="https://img.shields.io/maintenance/yes/2020?style=for-the-badge" title="Status do projeto">
    <img src="https://img.shields.io/github/workflow/status/grintex/app-covid-api/Main?label=Build&logo=github&logoColor=white&style=for-the-badge" title="Status do build">
</p>

## API app COVID Chapecó

Esse repositório contém o código-fonte da API REST utilizada pelo aplicativo móvel *Coronavírus Chapecó* ([repositório Github](https://github.com/grintex/app-covid)), desenvolvido no contexto do [Edital Nº 259/GR/UFFS/2020](https://www.uffs.edu.br/atos-normativos/edital/gr/2020-0259) da [Universidade Federal da Fronteira Sul](https://www.uffs.edu.br), campus Chapecó/SC. O projeto de extensão envolve os cursos de Medicina e Ciência da Computação da UFFS campus Chapecó, sob coordenação da profa. Thais Nascimento Helou (Medicina).

> **LIVE:** [https://app-covid.api.uffs.cc](https://app-covid.api.uffs.cc)

___

> **IMPORTANTE:** esse repositório é dedicado exclusivamente à API REST. Se você está procurando o aplicativo, veja esse [repositório Github](https://github.com/grintex/app-covid).

___

### Descrição do projeto

A proposta busca a orientação e informação da população sobre medidas de prevenção contra a infecção pelo novo Coronavírus. Será direcionada tanto a casos suspeitos quanto a indivíduos assintomáticos através de aplicativo elaborado por professores e discentes da UFFS do curso de Medicina em parceria com o curso de Ciências da Computação. A divulgação do aplicativo ocorrerá através de banners a serem colocados nas Unidades Básicas de Saúde, Unidades de Pronto Atendimento e Hospital Regional do Oeste, assim como através de consulta de orientação telefônica também realizada por discentes da UFFS e profissionais de saúde do município de Chapecó. Espera-se que com isso a população esteja mais informada e consciente sobre as medidas de prevenção necessárias rente à pandemia do novo Coronavírus, com o objetivo de diminuir a transmissão e evitar novos casos da doença. EDITAL Nº 259/GR/UFFS/2020 (projeto EXT-2020-0041)

### Equipe

**Coordenação e colaboração:**
* Thais Nascimento Helou - _Coordenadora do projeto, Professora Medicina, UFFS Chapecó/SC - [thais.helou@uffs.edu.br](mailto:thais.helou@uffs.edu.br)_
* Fernando Bevilacqua - _Professor Ciência da Computação, UFFS Chapecó/SC - [fernando.bevilacqua@uffs.edu.br](mailto:fernando.bevilacqua@uffs.edu.br)_

**Criação e desenvolvimento:**

* Brenda Thomas (Medicina, UFFS Chapecó/SC)
* Rafael Fagundes (Medicina, UFFS Chapecó/SC)
* Jean Carlo Hilger (Ciência da Computação, UFFS Chapecó/SC)
* Junior Vitor Ramisch (Ciência da Computação, UFFS Chapecó/SC)
* Mateus Koppe (Ciência da Computação, UFFS Chapecó/SC)

**Suporte:**

* [Grintex](https://grintex.uffs.cc) - Grupo de Inovação Tecnológica Experimental (UFFS Chapecó/SC)

## Informações para desenvolvedores

### Endpoints disponíveis

Os endpoints disponíveis no momento são os seguintes:

#### `/v0/stats` (GET)

Informações sobre casos de COVID-19 em Chapecó e SC.

- [URL teste](https://app-covid.api.uffs.cc/v0/stats)

___

### Desenvolvimento

#### 1. Pré-requisitos

Você precisa ter as [ferramentas](https://laravel.com/docs/7.x/installation) relacionadas ao [Laravel](https://laravel.com) instaladas.


#### 2. Preparar o projeto

Clone o projeto:

```
git clone https://github.com/grintex/app-covid-api && cd app-covid-api
```

Crie um arquivo configuração local

```
cp .env.example .env
```

Edite o arquivo `.env` com os dados do seu ambiente.


#### 3. Teste

Para testar a API localmente, rode:

```
php artisan serve
```

O browser abrirá apontando para o endereço [http://localhost:8000/](http://localhost:8000/) para você acessar a api.


## Contribua

Sua ajuda é muito bem-vinda, independente da forma! Confira o arquivo [CONTRIBUTING.md](CONTRIBUTING.md) para conhecer todas as formas de contribuir com o projeto. Por exemplo, [sugerir uma nova funcionalidade](https://github.com/grintex/app-covid-api/issues/new?assignees=&labels=&template=feature_request.md&title=), [reportar um problema/bug](https://github.com/grintex/app-covid-api/issues/new?assignees=&labels=bug&template=bug_report.md&title=), [enviar um pull request](https://github.com/grintex/hacktoberfest/blob/master/docs/tutorial-pull-request.md), ou simplemente utilizar o projeto e comentar sua experiência.

## Licença

Esse projeto é licenciado nos termos da licença open-source [Apache 2.0](https://choosealicense.com/licenses/apache-2.0/) e está disponível de graça.

## Changelog

Veja todas as alterações desse projeto no arquivo [CHANGELOG.md](CHANGELOG.md).


## Links

Abaixo está uma lista de links interessantes e projetos similares:

* [covid.saude.gov.br](https://covid.saude.gov.br/)
* [UFFS](https://www.uffs.edu.br)
* [Aplicativo Coronavirus - SUS](https://www.gov.br/pt-br/apps/coronavirus-sus)
* [Github Coronavirus - SUS](https://github.com/spbgovbr/aplicativo-coronavirus-sus)
