
<div class="skill-container">
    <h1>My Skill Levels</h1> <!-- Title for the skill bars -->
    <div id="skillBars"></div> <!-- Container for skill bars -->
</div>

<style>
    body {
        margin: 0; /* Remove default margin */
        padding: 0; /* Remove default padding */
        font-family: Arial, sans-serif; /* Set a default font for the body */
        background-color: #f8f9fa; /* Light background color for better contrast */
    }

    .skill-container {
        max-width: 900px; /* Max width for the container */
        margin: 0 auto; /* Center the container */
        padding: 20px; /* Padding around the content */
        background-color: #ffffff; /* White background for the container */
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    }

    h1 {
        text-align: center; /* Center the title */
        color: #333; /* Dark color for the title */
    }

    .Skill-Bar {
        margin: 20px 0; /* Space between skill bars */
    }

    .Skill-Name {
        font-weight: bold; /* Make skill names bold */
        margin-bottom: 5px; /* Space between skill name and bar */
    }

    .Skill-bar-Holder {
        position: relative; /* Needed for positioning the percentage label */
        width: 100%; /* Make the holder responsive */
        max-width: 803px; /* Max width for the skill bar */
        background-color: #e0e0e0; /* Light gray background for the bar */
        height: 25px; /* Height of the skill bar */
        border-radius: 5px; /* Rounded corners */
        overflow: hidden; /* Prevent overflow of filled bar */
    }

    .Skill-Fill {
        height: 100%; /* Fill the height of the bar */
        background-color: #76c7c0; /* Color of the filled portion of the bar */
        transition: width 0.3s ease; /* Smooth transition for width changes */
        position: relative; /* Needed for positioning the percentage label */
    }

    .Skill-Percent {
        position: absolute; /* Positioning the percentage label */
        top: 0; /* Align to the top of the skill bar */
        left: 50%; /* Center horizontally */
        transform: translateX(-50%); /* Center text */
        color: #000; /* Color of the text */
        font-weight: bold; /* Make percentage label bold */
        line-height: 0px; /* Center the label vertically */
    }

    @media (max-width: 600px) {
        .Skill-bar-Holder {
            height: 20px; /* Adjust height on smaller screens */
        }

        .Skill-Percent {
            line-height: 20px; /* Adjust line height for smaller screens */
        }
    }
</style>

<script>
    const skills = [
        { name: "JavaScript", percent: 1100 },
        { name: "PHP", percent:75 },
        { name: "CSS", percent: 75 },
        { name: "HTML", percent: 80 },
        { name: "React", percent: 15 },
        { name: "C#", percent: 10 },
    ];

    function createSkillBar(skillName, skillPercent) {
        const Percent = 803/100*skillPercent
        const skillBarContainer = document.createElement('div');
        skillBarContainer.className = 'Skill-Bar';

        const skillNameElement = document.createElement('p');
        skillNameElement.className = 'Skill-Name';
        skillNameElement.textContent = skillName;

        const skillBarHolder = document.createElement('div');
        skillBarHolder.className = 'Skill-bar-Holder';

        const skillFill = document.createElement('div');
        skillFill.className = 'Skill-Fill';
        skillFill.style.width = (skillPercent) + '%'; // Calculate width based on percent

        const skillPercentElement = document.createElement('p');
        skillPercentElement.className = 'Skill-Percent';
        skillPercentElement.textContent = skillPercent + '%';
        skillPercentElement.style.left = Percent + "px"
        // Append elements to the skill bar container
        skillBarHolder.appendChild(skillFill);
        skillBarHolder.appendChild(skillPercentElement);
        skillBarContainer.appendChild(skillNameElement);
        skillBarContainer.appendChild(skillBarHolder);

        return skillBarContainer;
    }

    // Get the skillBars container and append each skill bar to it
    const skillBarsContainer = document.getElementById('skillBars');
    skills.forEach(skill => {
        const skillBar = createSkillBar(skill.name, skill.percent);
        skillBarsContainer.appendChild(skillBar);
    });
</script>