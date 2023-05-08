export class Region{
    public id: number;
    public nom: string;
    public description: string;

    constructor(
         id: number,
         nom: string,
         description: string,
    ){
        this.description = description;
        this.nom = nom;
        this.id = id;
    }
}

