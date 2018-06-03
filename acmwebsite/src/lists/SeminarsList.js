let SeminarsList = [
    {
        room: "CS-506",
        title: "3D Photo Booths",
        date_time: "October 10, 2017 (12:00PM to 1:00PM)",
        presenter: "Sharma Rishabh",
        // description: null
    },
    {
        room: "CS-506",
        title: "The EIFFEL Programming Language/IDE",
        date_time: "April 10, 2018 (12:00PM – 1:00PM)",
        presenter: "Dr. William McCarthy",
        description: "The Eiffel Programming Language and EiffelIDE was designed by Bertrand Meyer in his classic text: \
        OBJECT-ORIENTED SOFTWARE CONSTRUCTION.  It is used in industries where reliability and speed are critical, \
        including Aerospace, Banking/Finance, Manufacturing, and Telecom. One of its key aspects is Design by Contract, \
        a method of software construction that designs components of a system to cooperate using precise contracts, \
        with preconditions, postconditions, assertions and class/loop invariants to ensure the reliability of the \
        software created. \
        \nEiffel is an OO language that fully supports classes, inheritance and multiple inheritance, \
        abstract classes, polymorphism, dynamic binding, and generic programming. Eiffel has had SCOOP (Simple \
        Concurrent OOP) technology since 2011, which allows creating concurrent, OO programs, without having to use \
        threads, locks, condition variables, etc. In this talk, I will illustrate the use of these concepts in \
        improving the quality of software programs, and demonstrate the use of the EiffelStudio in creating quality \
        Object Oriented software on multiple platforms (OSX, Linux, and Windows)"
    },

    //add more here!

];

let count = SeminarsList.length;
SeminarsList.map((seminar, id) => {
    SeminarsList[id].id = count;
    count--;
});

export default SeminarsList.reverse();