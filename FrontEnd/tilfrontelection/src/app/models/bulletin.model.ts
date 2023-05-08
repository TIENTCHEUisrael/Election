export class Bulletin{
    public id: number;
    public couleur: string;
    public photo: string;


    constructor(
         id: number,
         couleur: string,
         photo: string,
    ){
        this.id = id;
        this.couleur = couleur;
        this.photo = photo;
    }
}
