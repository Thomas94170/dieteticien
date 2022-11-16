import React from 'react';

export default function About() {
    return(
        <div>
            <div className="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">

                <h2 className="text-3xl font-bold tracking-tight sm:text-4xl">A propos de moi</h2>
                <p className="text-xl ">Diététicienne-nutritionniste diplômée d'état de l'université PARIS XII, je suis
                    passionnée par l'équilibre alimentaire gourmand, c'est à dire par tout ce qui entoure
                    l'alimentation, la santé et la gourmandise (je suis d'ailleurs membre sympathisant de l'association
                    des chefs cuisiniers Euro-Toques).
                    Depuis 13 ans, je consulte dans mon cabinet situé 68 rue d'Alsace à Caen : je vous propose une prise
                    en charge diététique personnalisée afin de vous assurer un équilibre alimentaire satisfaisant vos
                    besoins nutritionnels et excluant la frustration. Et si cela est nécessaire, je pourrais vous
                    conseiller en micronutrition.
                    Je saurai vous écouter et vous comprendre afin de vous aider au mieux.</p>
            </div>
            <div className="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">

                <p className="text-xl ">Le diététicien-nutritionniste, souvent mal désigné par le terme seul de
                    diététicien, est un professionnel paramédical dans le domaine de la nutrition. Sa mission est à la
                    fois préventive et curative. Il prévient les risques cardio-vasculaires et évite le surpoids.</p>
                <br/>
            </div>

            <div className="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                <h2 className="text-3xl font-bold tracking-tight sm:text-4xl">Notre équipe</h2>
                <p className="text-xl ">Spécialiste de la nutrition, notre équipe compose des menus adaptés à l'état de
                    santé de chacun : sans sel, sans sucre, sans graisse etc...</p>
            </div>
        </div>

    )
}
