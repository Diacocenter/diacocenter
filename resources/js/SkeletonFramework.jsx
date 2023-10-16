import Skeleton from "react-loading-skeleton"
import 'react-loading-skeleton/dist/skeleton.css'
import React from "react";

export const SkeletonFramework = ({height , width , borderRadius , className}) =>{
    return (
        <Skeleton height={height} width={width} borderRadius={borderRadius} className={className}/>
    )
}

export const SkeletonTableInvoices = () => {
    return Array(8).fill({}).map((value, key)=>{
        return(
            <tr key={key}>
                <td >
                    <Skeleton height={20} width={350}/>
                </td>
                <td>
                    <Skeleton height={20} width={150}/>
                </td>
                <td>
                    <Skeleton height={20} width={180}/>
                </td>
                <td>
                    <Skeleton height={20} width={50}/>
                </td>
                <td>
                    <Skeleton height={30} width={150} className="rounded-pill"/>
                </td>
            </tr>
        )
    })
}



export const SkeletonTableTicket = () => {
    return (
        Array(3).fill({}).map((value , key)=>{
            return (
                <tr key={key}>
                    <td>
                        <Skeleton height={20} width={350}/>
                    </td>
                    <td>
                        <Skeleton height={20} width={100}/>
                    </td>
                    <td>
                        <Skeleton height={30} width={150} className="rounded-pill"/>
                    </td>
                </tr>
            )
        })
    )
}

export const SkeletonTableCoupons = () => {
    return Array(8).fill({}).map((value, key)=>{
        return (
            <tr key={ key }>
                <td>
                    <Skeleton height={20} width={150} />
                </td>
                <td>
                    <Skeleton height={20} width={150} />
                </td>
                <td>
                    <Skeleton height={20} width={180} />
                </td>
                <td>
                    <Skeleton height={30} width={150} className="rounded-pill"/>
                </td>
            </tr>
        )
    })
}


export const SkeletonTableActivites = () => {
    return Array(8).fill({}).map((value, key)=>{
        return(
            <tr key={key}>
                <td>
                    <Skeleton  height={20} width={100}/>
                </td>
                <td>
                    <Skeleton  height={20} width={100}/>
                </td>
                <td>
                    <Skeleton  height={20} width={100}/>
                </td>
                <td>
                    <Skeleton  height={20} width={100}/>
                </td>
            </tr>
        )
    })
}


export const SkeletonTableMyTours = () => {
    return Array(8).fill({}).map((value, key)=>{
        return(
            <tr key={key}>
                <td className="d-flex text-center align-items-center" >
                    <Skeleton  circle={true} height={35} width={35} />
                    <Skeleton  className="ms-4 " height={20} width={450}/>
                </td>
                <td className="p-0 align-middle">
                    <Skeleton className="m-0" height={20} width={80}/>
                </td>
                <td className="p-0 align-middle">
                    <Skeleton  height={20} width={80}/>
                </td>
                <td className="p-0 align-middle">
                    <Skeleton  height={30} width={150} className="rounded-pill"/>
                </td>
            </tr>
        )
    })
}

export const SkeletonTableAccountEducationalBackground = () => {
    return Array(2).fill({}).map((value , key)=>{
        return(
            <tr key={key}>
                <td className="align-middle">
                    <Skeleton height={20} width={250}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={20} width={125}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={20} width={70}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={20} width={50}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={20} width={50}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={25} width={150} className="rounded-pill"/>
                </td>
                <td className="align-middle">
                    <div className="d-flex flex-row justify-content-center">
                        <Skeleton height={20} width={20} className="me-4"/>
                        <Skeleton height={20} width={20} />
                    </div>
                </td>
            </tr>
        )
    })

}


export const SkeletonTableAccountWorkExperience = () => {
    return Array(2).fill({}).map((value , key)=>{
        return(
            <tr key={key}>
                <td className="align-middle">
                    <Skeleton height={20} width={125}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={20} width={70}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={20} width={50}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={20} width={50}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={30} width={120} className="rounded-pill"/>
                </td>
                <td className="align-middle">
                    <div className="d-flex flex-row justify-content-center">
                        <Skeleton height={20} width={20} className="me-4"/>
                        <Skeleton height={20} width={20} />
                    </div>
                </td>
            </tr>
        )
    })

}



export const SkeletonTableAccountDocuments = () => {
    return Array(2).fill({}).map((value , key)=>{
        return(
            <tr key={key}>
                <td className="align-middle">
                    <Skeleton height={20} width={100}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={20} width={30}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={20} width={80}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={30} width={120} className="rounded-pill"/>
                </td>
                <td className="align-middle">
                    <div className="d-flex flex-row justify-content-center">
                        <Skeleton height={20} width={20}/>
                    </div>
                </td>
            </tr>
        )
    })

}

export const SkeletonTableTourList = () => {
    return Array(5).fill({}).map((value , key)=>{
        return(
            <tr key={key}>
                <td className="align-middle">
                    <Skeleton height={20} width={100}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={20} width={240}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={20} width={50}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={30} width={120} className="rounded-pill"/>
                </td>
            </tr>
        )
    })

}


export const SkeletonTableGroupList = () => {
    return Array(5).fill({}).map((value , key)=>{
        return(
            <tr key={key}>
                <td className="align-middle">
                    <Skeleton height={20} width={100}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={20} width={50}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={20} width={240}/>
                </td>
                <td className="align-middle">
                    <Skeleton height={30} width={120} className="rounded-pill"/>
                </td>
            </tr>
        )
    })

}

export const SkeletonTableAccountAgreement = () => {
    return Array(10).fill({}).map((value , key)=>{
        return(
            <tr key={ key }>
                <td>
                    <Skeleton height={25} width={200} />
                </td>
                <td>
                    <Skeleton height={30} width={200} className="rounded-pill" />
                </td>
            </tr>
        )
    })

}


