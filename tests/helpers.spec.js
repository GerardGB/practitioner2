const helpers = require ('../helpers')

test('Suma function return 3 when we pass 2 and 1', function () {

    //Prepare (opcional) 

    //Execute/Executar
    const resultat = helpers.suma(2,1)

    //Comprovar/Assert/Expect
    expect(resultat).toBe(3)
})

//TDD -> Test Driven Development

test('Multiplica funtion return 50 when we pass 5 and 10', () => {

    const resultat = helpers.multiple(5,10)
    //Comprovar/Assert/Expect
    expect(resultat).toBe(50)

})

/* test('Suma function return 3 when we pass 2 and 1', () => {

}) */

/* const f1 = function () {

}

test('Suma function return 3 when we pass 2 and 1', f1 () {
    
}) */