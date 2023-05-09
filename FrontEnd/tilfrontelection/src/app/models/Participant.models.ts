import { Region } from "./Region.models"

export class Participant {

    public nom!:string
		public num_cni!:string
		public age!:number
		public sexe!:string
		public id_region!: Region
		public login!:string
		public pwd!:string
		public email!:string
		public tel!:string
    public statut!:string
    public etat!:boolean

    public constructor()
    {

    }
}
