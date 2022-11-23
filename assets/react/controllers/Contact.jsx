import React from "react";

export default function Contact(){
    return(
        <div>
            <div className="hidden sm:block" aria-hidden="true">
                <div className="py-5">
                    <div className="border-t border-gray-200"></div>
                </div>
            </div>

            <div className="mt-10 sm:mt-0">
                <div className="md:grid md:grid-cols-3 md:gap-6">
                    <div className="md:col-span-1 ">
                        <div className="px-4 sm:px-0">
                            <h3 className="text-lg font-medium leading-6 text-gray-900">Prenez contact avec moi!</h3>
                            <p className="mt-1 text-sm text-gray-600">Vous avez des questions, vous souhaitez commencer
                                un régime ou adapter vos repas selon vos allergies, envoyez moi un e-mail</p>
                        </div>
                    </div>
                    <div className="mt-5 md:col-span-2 md:mt-0">
                        <form action="https://formspree.io/f/xjvzllob" method="post">
                            <div className="overflow-hidden shadow sm:rounded-md">
                                <div className="bg-white px-4 py-5 sm:p-6">
                                    <div className="grid grid-cols-6 gap-6">
                                        <div className="col-span-6 sm:col-span-3">
                                            <label htmlFor="first-name"
                                                   className="block text-sm font-medium text-gray-700">Prénom</label>
                                            <input type="text" name="first-name" id="first-name"
                                                   autoComplete="given-name"
                                                   className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"/>
                                        </div>

                                        <div className="col-span-6 sm:col-span-3">
                                            <label htmlFor="last-name"
                                                   className="block text-sm font-medium text-gray-700">Nom</label>
                                            <input type="text" name="last-name" id="last-name"
                                                   autoComplete="family-name"
                                                   className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"/>
                                        </div>

                                        <div className="col-span-6 sm:col-span-4">
                                            <label htmlFor="email-address"
                                                   className="block text-sm font-medium text-gray-700">Adresse
                                                mail</label>
                                            <input type="text" name="email-address" id="email-address"
                                                   autoComplete="email"
                                                   className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"/>
                                        </div>


                                        <div className="col-span-6">
                                            <label htmlFor="street-address"
                                                   className="block text-sm font-medium text-gray-700">Votre
                                                message</label>
                                            <input type="text" name="message" id="message"
                                                   autoComplete="message"
                                                   className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"/>
                                        </div>






                                    </div>
                                </div>
                                <div className=" px-4 py-3 text-right sm:px-6">
                                    <button type="submit"
                                            className="  inline-flex justify-center rounded-md border border-transparent  py-2 px-4 bg-gray-400 px-4 py-2 text-sm font-medium text-black shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Envoyez!
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    )
}