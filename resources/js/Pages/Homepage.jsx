import { Link, Head } from "@inertiajs/react";
import { head } from "lodash";
export default function Homepage(props) {
    console.log(props);
    return (
        <div className="flex justify-center items-center min-h-screen bg-slate-50 text-white text-2xl">
            <Head title={props.title}></Head>
            <div className="items-center justify-center flex flex-col">
                {props.news ? (
                    props.news.map((data, i) => {
                        return (
                            <div key={i} className="p-4 m-2 bg-white text-black shadow-md rounded-md border w-3/4">
                                <p className="text-2xl">{data.title}</p>
                                <p>{data.description}</p>
                                <p>{data.category}</p>
                                <p className="text-sm">{data.author}</p>
                            </div>
                        );
                    })
                ) : (
                    <p>tidak ada berita</p>
                )}
            </div>
        </div>
    );
}
