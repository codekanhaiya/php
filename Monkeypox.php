<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "includes/linksBundle.php";
    ?>
    <link href="css/blog.css" rel="stylesheet">
    <title>Monkeypox | PHP</title>
</head>

<body onload="myPreLoaderFunction();">

    <?php
    include "includes/header.php";
    ?>

    <!-- breadcrumb Designing -->
    <ul class="breadcrumb">
        <li class="breadList"><a href="index.php">Home</a></li>
        <li class="breadList">Health Blog</li>
    </ul>


    <!-- Appointment Letter -->
    <?php
    include "includes/patientSign.php";
    ?>
    <!-- patient login -->
    <?php
    include "includes/patientLogin.php";
    ?>
    <?php
    include "includes/patientReset.php";
    ?>
    <!-- chatBot -->
  <?php
  include "includes/chatBot.php"
  ?>


    <!-- Blogs Deatails  -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="card mb-3 mt-4 border-0">
                    <img src="img/blog/Monkey.jpg" class="card-img-top rounded blogImage" alt="Picture">
                    <div class="card-body blog">
                        <h1 class="card-title blogH1">Monkeypox: Causes, Symptoms, Treatment and Prevention</h1>
                        <hr class="border-2 border-top border-dark">
                        <p class="card-text">Monkeypox is a smallpox-like viral disease. The first case was discovered
                            in 1958 when a pox-like disease occurred in monkeys undergoing research; therefore, the name
                            of the disease is Monkeypox. The first human case of Monkeypox was reported in 1970 in the
                            Democratic Republic of Congo. Since then, cases have been reported primarily in Central and
                            West Africa. Though it can affect anyone, children tend to get affected more than adults.
                        </p>
                        <p class="card-text">The symptoms are generally mild such as fever, rashes, body ache, and
                            headache. But there can be complications, according to WHO. There are two variants- the
                            Congo strain (up to 10% mortality) and the West African strain (1% fatality rate).</p>
                        <h5 class="card-title blogH5">Cause of Monkeypox</h5>
                        <p class="card-text">Monkeypox is a rare disease caused by a double-stranded enveloped virus of
                            the Orthopoxvirus genus. As Monkeys have been used for conducting research, the name of the
                            illness is Monkeypox.</p>
                        <h5 class="card-title blogH5">Symptoms to Look Out For</h5>
                        <p class="card-text">The symptoms are similar to smallpox infection but are comparatively
                            milder. Generally, the incubation period of Monkeypox is 7-14 days which means there is a
                            gap of 7-14 days between infection and the appearance of symptoms, but the incubation period
                            can even range between 5-21 days.</p>
                        <p class="card-text">Though it is a self-limiting disease and patients recover between 2 to 4
                            weeks, severe cases can lead to death. Severe cases are reported more commonly among
                            children. Historically, the fatality rate has been recorded as 0-11%. However, lately, the
                            ratio has been 3-6%.</p>
                        <h5 class="card-title blogH5">Early-stage symptoms (0-5 days)</h5>
                        <ol type="1">
                            <li>Fever</li>
                            <li>Headache</li>
                            <li>Exhaustion</li>
                            <li>Chills and/or sweat</li>
                            <li>Backache</li>
                            <li>Lymphadenopathy - Swollen and painful lumps can occur in front of ears, underarm,
                                head, neck, groin, or lower limbs region. It can occur on one side or both sides of the
                                body.</li>
                            <li>Sore throat</li>
                            <li>Cough</li>
                        </ol>
                        <h5 class="card-title blogH5">Following are the key stages of the appearance of rashes-</h5>
                        <ol>
                            <li><span class="trimTxt">Enanthem- </span>First lesion (red spots) appear on the tongue and mouth.</li>
                            <li><span class="trimTxt">Macule- </span>These are flat, discoloured regions of skin that spread in a centrifugal
                                pattern, i.e. from face to legs, arms, palms, and soles, within 24 hours.</li>
                            <li><span class="trimTxt">Papules- </span>The lesions progress to papules by the 3rd day. Papules are solid raised
                                areas on the skin with less than 1 cm diameter.</li>
                            <li><span class="trimTxt">Vesicles- </span>These lesions turn into vesicles (thin-walled fluid-filled sacs) by the 4th
                                to 5th day.</li>
                            <li><span class="trimTxt">Pustules- </span>These lesions become pustules by the 6th to 7th day. Pustules are tiny,
                                pus-filled blisters on the skin.</li>
                            <li><span class="trimTxt">Scabs- </span>As healing begins, these lesions become dry and itchy. These scabs remain for
                                1 week before they fall off on their own.</li>
                        </ol>
                        <h5 class="card-title blogH5">Treatment of Monkeypox</h5>
                        <p class="card-text"> Following are the basic elements in the management of Monkeypox.</p>

                        <p class="card-text">
                        <ol>
                            <span class="trimTxt">
                                <li>Patient isolation</li>
                            </span>
                            <ol type="a">
                                <li>Patients need to isolate themselves in a separate room until all the lesions heal
                                    and scabs fall off.</li>
                                <li>The patient should wear a triple-layer mask.</li>
                                <li>The patient should be encouraged to wear long pants and full sleeve shirts to
                                    minimize the contact and spread of skin lesions.</li>
                            </ol>
                            <span class="trimTxt">
                                <li>Protection of skin lesions</li>
                            </span>
                            Management of skin lesions depends on the location of skin lesions-
                            <ol type="a">
                                <span class="trimTxt">
                                    <li>Skin rash</li>
                                </span>
                                Your doctor might clean your lesion with antiseptic and cover it with a light dressing
                                if the lesions are severe. You should not touch or scratch those lesions at all. If your
                                doctor suspects an infection, he might suggest antibiotics.
                                <span class="trimTxt">
                                    <li>Oral ulcers</li>
                                </span>
                                Your doctor may advise you warm saline gargles for fast recovery and topical
                                anti-inflammatory medications to relieve pain and inflammation.
                                <span class="trimTxt">
                                    <li>Conjunctivitis</li>
                                </span>
                                Generally reddening of eyes/ conjunctivitis heals on its own, but if you face vision
                                problems or symptoms persist for an extended period, you should consult your doctor
                                immediately.
                            </ol>
                            <span class="trimTxt">
                                <li>Nutritional support and rehydration</li>
                            </span>
                            <p>Dehydration can occur due to the inability to take food due to a general feeling of
                                illness, fever, headache, and other symptoms. Your doctor may suggest increasing fluid
                                intake and taking Oral Rehydration Solution (ORS). Apart from this, you should try
                                taking healthy and nutritious food for early recovery.</p>
                            <span class="trimTxt">
                                <li>Symptomatic treatment</li>
                            </span>
                            <p>Fever- Lukewarm sponge bath and paracetamol is advised to decrease the body temperature.
                            </p>
                            <p>Skin itching- Your doctor may suggest topical lotions and antihistamines that relieve
                                skin itching and redness.</p>
                            <p>Nausea and vomiting- Your doctor may suggest antiemetic drugs to prevent vomiting.</p>
                            <p>Headache/Body ache- Paracetamol gives relief from pain.</p>
                        </ol>
                        </p>

                        <p><span class="trimTxt">You should consult your doctor immediately if any of the following symptoms appear-</span></p>
                        <ol>
                            <li>Blurred vision</li>
                            <li>Breathing difficulty</li>
                            <li>Chest pain</li>
                            <li>Decreased urine excretion</li>
                            <li>Poor intake of food</li>
                            <li>Altered consciousness</li>
                            <li>Seizures</li>
                            <li>Lethargy</li>
                        </ol>
                        <h5 class="card-title blogH5">Prevention of Monkeypox</h5>
                        <p class="card-text"><span class="trimTxt">The virus can get transmitted from an infected person, animal, or material.
                                You can prevent the spread by adhering to the following tips.</span></p>
                        <ul>
                            <li>Avoid direct contact with body fluids such as respiratory secretions or skin lesions.
                            </li>
                            <li>Avoid having intimate contact like face-to-face contact for a prolonged period, kissing,
                                cuddling, or sex.</li>
                            <li>Avoid contact with sick animals or dead animals in areas prone to Monkeypox.</li>
                            <li>Isolation of the infected person is essential.</li>
                            <li>Wash your hands with soap and water frequently.</li>
                            <li>Cook animal meat thoroughly.</li>
                            <li>Wear a Personal Protective Equipment (PPE) kit when taking care of a patient suffering
                                from Monkeypox.</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "includes/footer.php";
    ?>

</body>

</html>