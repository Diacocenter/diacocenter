import React from "react";


const SearchProjects = () => {
    return (
        <>
             <section className="container mt-32 mb-14">
                <div className="form-control ">
                    <div className="input-group justify-center">
                        <input type="text" placeholder="Search Problem"
                            className="input input-bordered w-4/6 input-success shadow border-0"/>
                        <button className="btn btn-square btn-success"
                            style={{ background: `linear-gradient(90deg, #7ABBFF 0%, #3E6EA0 142.14%)`}}>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26" fill="none">
                                <path d="M12 21C17.2467 21 21.5 16.7467 21.5 11.5C21.5 6.25329 17.2467 2 12 2C6.75329 2 2.5 6.25329 2.5 11.5C2.5 16.7467 6.75329 21 12 21Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M26 25L21 20" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div className=" text-center w-full  ">
                    <div className="join space-x-2 w-10/12 md:w-fit overflow-x-auto px-1 py-7">
                        <input className="bg-white btn btn-success shadow border-0" type="radio" name="options"
                            aria-label="#Advanced-Materials"/>
                        <input className="bg-white btn btn-success shadow border-0" type="radio" name="options"
                            aria-label="#Electronics"/>
                        <input className="bg-white btn btn-success shadow border-0" type="radio" name="options"
                            aria-label="#Polymer"/>
                        <input className="bg-white btn btn-success shadow border-0" type="radio" name="options"
                            aria-label="#IT"/>
                        <input className="bg-white btn btn-success shadow border-0" type="radio" name="options"
                            aria-label="#Chemistry"/>
                        <input className="bg-white btn btn-success shadow border-0" type="radio" name="options"
                            aria-label="#Civil"/>
                        <input className="bg-white btn btn-success shadow border-0" type="radio" name="options"
                            aria-label="#Blockchain"/>
                        <input className="bg-white btn btn-success shadow border-0" type="radio" name="options"
                            aria-label="#Oil"/>
                        <input className="bg-white btn btn-success shadow border-0" type="radio" name="options"
                            aria-label="#AI"/>
                    </div>
                </div>
            </section>
                {/* splide should be added */}
            <div id="project" className="container splide">
                <div className="splide__track pb-3">
                    <ul className="splide__list">
                        {/* @forelse($projects as $project) */}
                            <li className="splide__slide rounded-lg overflow-hidden shadow">
                                <a >
                                <figure><img className="aspect-square	" src="{{ asset('/storage/projects/thumbnails/'. $project->headerImage->url) }}" /></figure>
                                <div className="card-body">
                                    {/* <h2 className="card-title text-lightBlack">{{ $project->title }}</h2> */}
                                    {/* <p className="xl:whitespace-normal lg:whitespace-normal md:whitespace-normal"
                                        style="
                                        display: -webkit-box;
                                        -webkit-line-clamp: 3; 
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                        ">{{ $project->description }}</p> */}
                                    <div className="card-actions justify-between">
                                        <div>Price</div>
                                        {/* <div>{{ $project->price }}</div> */}
                                    </div>
                                    <div className="card-actions justify-between text-gray">
                                        <div>StoreMation</div>
                                        {/* <div>{{ $project->start_date }}</div> */}
                                    </div>
                                </div>
                                </a>
                            </li>
                        {/* @empty */}
                            <div><p className="text-red-600">No Data</p></div>
                        {/* @endforelse */}
                    </ul>

                </div>
         
            </div>

                
        </>
    )
}

export default SearchProjects;