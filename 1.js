function myBiodata(name,age) {
  return {
    name : name,
    age : age,
    address: "Lampung Timur",
    hobbies: ["Membaca","Progaming","Game"],
    is_married : false,
    list_school: [
        {
          name: "SD N1 Raman Aji",
          year_in: 2007,
          year_out: 2013,
          major: null
        },
        {
          name: "SMP N1 Raman Utara",
          year_in: 2013,
          year_out: 2017,
          major: null
        },
        {
        name: "SMK N1 Raman Utara",
        year_in: 2016,
        year_out: 2019,
        major: "TKJ"

      }],
      skills: [{
        skill_name: "HTML",
        level: "advance"
      },
      {
        skill_name: "CSS",
        level: "advance"
      },
      {
        skill_name: "PHP",
        level: "advance"
      },
      {
        skill_name: "javascript",
        level: "advance"
      },
      {
        skill_name: "MYSQL",
        level: "beginner"
      }
    ],
    interest_in_coding: true

  }
}
console.log(myBiodata("Ahmad Nabil",18));
