create table t (id int not null, name text);

insert into t (id, name) values
(1, 'Arman'),
(2, 'Bauyrzhan'),
(2, 'Sabyrzhan'),
(3, 'Berik'),
(3, 'Dauren'),
(3, 'Daulet'),
(4, 'Arsen'),
(5, 'Qaisar');

-- pervoe resheniye
with duplicates as (
    select t.*, count(*) over (partition by id) as dup_count
    from t
)
select * from duplicates where dup_count > 1;

-- vtoroe resheniye
select id, count(id) as count from t group by id having count>1;