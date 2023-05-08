export class Election{
    public id: number;
    public label: string;
    public description: string;
    public status: string;


    constructor(
         id: number,
         label: string,
         description: string,
         status: string,
    ){
        this.id = id;
        this.label = label;
        this.description = description;
        this.status = status
    }

}

