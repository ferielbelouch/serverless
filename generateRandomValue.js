function main(params) {
    const randomValue = Math.floor(Math.random() * 100); // Génère une valeur aléatoire entre 0 et 99
    return { original: randomValue };
}

module.exports = {
    main: main
};

