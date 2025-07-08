select tipo_movimento, data_movimento, valor_movimento, nome_categoria, nome_empresa, nome_usuario, banco_conta
from tb_movimento
inner join tb_categoria
on tb_categoria.id_categoria = tb_movimento.id_categoria
inner join tb_empresa
on tb_empresa.id_empresa = tb_movimento.id_empresa
inner join tb_usuario
on tb_usuario.id_usuario = tb_movimento.id_usuario
inner join tb_conta
on tb_conta.id_conta = tb_movimento.id_conta
where tb_movimento.tipo_movimento = 2;

select sum(valor_movimento)
from tb_movimento
where tipo_movimento = 2
and id_usuario = 5

select tipo_movimento, data_movimento, valor_movimento, nome_categoria, nome_empresa, nome_usuario, banco_conta
from tb_movimento
inner join tb_categoria
on tb_categoria.id_categoria = tb_movimento.id_categoria
inner join tb_empresa
on tb_empresa.id_empresa = tb_movimento.id_empresa
inner join tb_usuario
on tb_usuario.id_usuario = tb_movimento.id_usuario
inner join tb_conta
on tb_conta.id_conta = tb_movimento.id_conta
where tb_movimento.tipo_movimento = 1;

select * from tb_movimento where tipo_movimento = 2;
select * from tb_movimento where tipo_movimento = 1;

select nome_usuario from tb_usuario where nome_usuario like '%a%';
select nome_usuario from tb_usuario where nome_usuario like '%d%';
select nome_usuario from tb_usuario where nome_usuario like '%b%';

select data_cadastro, data_movimento
from tb_usuario
inner join tb_movimento
on tb_movimento.id_usuario = tb_usuario.id_usuario
where data_movimento between '2023-01-01' and '2024-02-20';

select nome_categoria, data_movimento
from tb_categoria
inner join tb_movimento
on tb_movimento.id_categoria = tb_categoria.id_categoria;

select nome_usuario, email_usuario, banco_conta, saldo_conta, numero_conta
from tb_usuario
inner join tb_conta
on tb_conta.id_usuario = tb_usuario.id_usuario;

select distinct nome_usuario, email_usuario, senha_usuario, data_cadastro, nome_categoria, nome_empresa,
                telefone_empresa, endereco_empresa, banco_conta, agencia_conta, numero_conta, saldo_conta,
                tipo_movimento, data_movimento, valor_movimento , obs_movimento
		from tb_usuario
        inner join tb_categoria
        on tb_categoria.id_categoria = tb_usuario.id_usuario
        inner join tb_empresa
        on tb_empresa.id_usuario = tb_usuario.id_usuario
        inner join tb_conta
        on tb_conta.id_usuario = tb_usuario.id_usuario
        inner join tb_movimento
        on tb_movimento.id_usuario = tb_usuario.id_usuario;
        
select * from tb_usuario, tb_categoria, tb_empresa, tb_conta, tb_movimento;        
        



