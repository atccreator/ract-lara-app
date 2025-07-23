export default function Home({name}) {
    return (
        <div className="flex items-center justify-center h-screen bg-gray-100">
            <h1 className="text-4xl font-bold text-blue-600">Welcome to the Home Page {name}</h1>
        </div>
    );
}