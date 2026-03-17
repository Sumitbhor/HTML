# Student System Database Design

## 1. User Table

Stores general user information.

**Table: User**

| Field | Description |
|------|-------------|
| userId | Primary identifier for user |
| firstName | User first name |
| lastName | User last name |
| contact | Contact number |
| email | User email |
| password | Account password |
| status | Account status |
| emailVerified | Email verification status |
| created_at | Account creation timestamp |
| updated_at | Last update timestamp |

---

# 2. Student Table

Stores student specific details.

**Table: Student**

| Field | Description |
|------|-------------|
| studentId | Primary key |
| userId | Foreign key referencing User |
| college_name | College name |
| degree | Degree program |
| branch | Branch / specialization |
| graduation_year | Graduation year |
| expertise_level | Skill expertise level |
| employability | Employability status |
| assigned_on | Assignment date |
| about | Student bio |
| github | GitHub profile |
| linkedin | LinkedIn profile |
| skills | Skills list |

---

# 3. Courses Table

Stores course information.

**Table: Courses**

| Field | Description |
|------|-------------|
| courseId | Primary key |
| courseName | Course name |
| description | Course description |
| language_id | Linked language |

Additional classification:

- Runtime
- Technology
- Layer
- Technology Map
- Concepts

---

# 4. Student Course Table

Mapping between students and courses.

**Table: student_course**

| Field | Description |
|------|-------------|
| id | Primary key |
| studentID | Foreign key referencing Student |
| courseId | Foreign key referencing Courses |
| progressId | Progress tracking id |
| enrolledDate | Enrollment date |

---

# 5. Hands-on Table (Hands-on)

Stores hands-on Hands-ons.

**Table: Hands-on**

| Field | Description |
|------|-------------|
| id | Primary key |
| courseId | Foreign key referencing course |
| title | Hands-on title |
| description | Hands-on description |
| dueDate | Submission deadline |

---

# 6. Hands-on Submission Table

Stores student Hands-on submissions.

**Table: Hands-on_submission**

| Field | Description |
|------|-------------|
| id | Primary key |
| Hands-on_id | Foreign key referencing Hands-on |
| student_id | Foreign key referencing student |
| github_link | GitHub submission link |
| submitted_at | Submission timestamp |

---

# 7. Candidate Answer Table

Stores answers submitted during assessments.

**Table: candidateAnswer**

| Field | Description |
|------|-------------|
| id | Primary key |
| assessment_id | Foreign key referencing assessment |
| candidate_id | Foreign key referencing candidate/student |
| test_question_id | Foreign key referencing test question |
| answerKey | Submitted answer |

---

# 8. Candidate Result Table

Stores assessment results.

**Table: candidateResult**

| Field | Description |
|------|-------------|
| id | Primary key |
| assessment_id | Foreign key |
| score | Final score |

---

# 9. Mentor Table

Stores mentor information.

**Table: mentor**

| Field | Description |
|------|-------------|
| id | Primary key |
| userId | Reference to user |
| expertise | Mentor expertise |

---

# 10. Mentorship Appointment Table (Meeting)

Stores mentorship session bookings.

**Table: mentorship_appointment**

| Field | Description |
|------|-------------|
| id | Primary key |
| studentID | Foreign key referencing student |
| mentorId | Foreign key referencing mentor |
| sessionDate | Session date |
| sessionTime | Session time |
| status | Session status (requested / scheduled / complete) |

---

# 11. Student Progress Table

Tracks student progress.

**Table: studentProgress**

| Field | Description |
|------|-------------|
| id | Primary key |
| studentId | Foreign key referencing student |
| knownTechnology | Technologies known |
| projectCount | Number of projects |
| projectId | Project reference |
| assessmentCompleted | Assessment completion count |
| growthScore | Growth score |

---

# 12. Assessment Table

Stores assessment metadata.

**Table: assessment**

| Field | Description |
|------|-------------|
| id | Primary key |
| test_id | Test identifier |
| candidate_id | Student taking assessment |
| status | Assessment status |
| created_by | Creator |
| created_on | Creation date |
| modify_by | Last modified by |
| modify_on | Last modification date |
| schedule_start | Assessment start time |
| schedule_end | Assessment end time |

---

# 13. Notification Table

Stores notifications sent to students.

**Table: notification**

| Field | Description |
|------|-------------|
| id | Primary key |
| studentID | Foreign key referencing student |
| msg | Notification message |
| source | Notification source |
| created_at | Notification timestamp |

Possible sources:

- Mentor
- Admin
- Employer

---

# System Overview

The database supports:

- Student management
- Course enrollment
- Hands-on 
- Assessment system
- Mentorship scheduling
- Student progress tracking
- Notifications