package com.aiti.java.project.repository;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import com.aiti.java.project.entities.CourseBatch;


public interface CourseBatchRepository extends JpaRepository<CourseBatch, Long> {
	
	
	
	
	
	
	// FIND ALL COURSE BATCHES BY COURSE ID
	@Query(value="SELECT course_batch.id, course_batch.course_name, course_batch.coordinator, course_batch.course_id, course_batch.course_level, course_batch.status, course_batch.created_at, course_batch.updated_at, course_batch.course_start_date, course_batch.course_end_date, course_batch.certificate_issuedate FROM course_batch inner join courses on course_batch.course_name = courses.course_name and course_batch.course_id = courses.id where course_batch.course_name = courses.course_name and course_batch.course_id = courses.id and courses.id = ?" , nativeQuery = true )
	List<CourseBatch> findAllCourseBatchesByCourseID(int course_id);
	
	
	
	
	
	
	// SELECTING FROM COURSE TABLE FOR RESULTS
	
	@Query(value="SELECT DISTINCT course_batch.id, course_batch.course_name, course_batch.coordinator, course_batch.course_id, course_batch.course_level, course_batch.status, course_batch.created_at, course_batch.updated_at, course_batch.course_start_date, course_batch.course_end_date, course_batch.certificate_issuedate FROM course_batch inner join students_results on course_batch.id = students_results.course_id where course_batch.id = students_results.course_id and students_results.student_id = ? and students_results.course_id = ?", nativeQuery=true)
	public List<CourseBatch> selectingFromCourseForResults(String student_id, int course_id);

		
		
		//	FIND STUDENT COURSE BATCH
		
		@Query(value="SELECT course_batch.id,course_batch.certificate_issuedate, course_batch.course_name, course_batch.course_id, course_batch.course_level, course_batch.coordinator, course_batch.course_start_date, course_batch.course_end_date, course_batch.status, course_batch.created_at, course_batch.updated_at FROM course_batch inner join students on course_batch.course_id = students.course_id WHERE course_batch.course_id = students.course_id and students.id = ? GROUP by course_batch.course_id order by course_batch.course_id", nativeQuery=true)
		public List<CourseBatch> findStudentCourseBatch(Long student_id);
		
		
		
		
		
		//	FIND PAST STUDENT COURSE BATCH
		
		@Query(value="SELECT course_batch.id, course_batch.coordinator, course_batch.course_name, course_batch.certificate_issuedate,  course_batch.course_id, course_batch.course_level, course_batch.status, course_batch.created_at, course_batch.updated_at, course_batch.course_start_date, course_batch.course_end_date, course_batch.certificate_issuedate FROM course_batch inner join past_students on course_batch.id = past_students.course_id WHERE course_batch.id = past_students.course_id and past_students.id = ? GROUP by course_batch.course_id order by course_batch.course_id", nativeQuery=true)
		public List<CourseBatch> findPastStudentCoursesBatch(Long student_id);
		
		
		
		
//		FIND STAFF COURSES
		
		@Query(value="SELECT course_batch.id, course_batch.coordinator, course_batch.course_name, course_batch.course_id, course_batch.course_level, course_batch.status, course_batch.created_at, course_batch.updated_at, course_batch.course_start_date, course_batch.course_end_date, course_batch.certificate_issuedate FROM course_batch inner join staff_details on course_batch.id = staff_details.course_id WHERE course_batch.id = staff_details.course_id and staff_details.id = ? GROUP by courses.course_id order by courses.course_id", nativeQuery=true)
		public List<CourseBatch> findStaffCourses(Long staff_id);
		
		
		
		
		
		
		// FIND COURSE BY COURSE NAME
		@Query(value="select id,course_id,course_name,coordinator,course_level,status,created_at,updated_at,course_start_date,course_end_date,certificate_issuedate from courses where courses.course_id = ? order by id" , nativeQuery = true )
		List<CourseBatch> findCourseByCourseName(String course_id);
		
		
		
		
		
		// FIND COURSE BY COURSE LEVEL
		@Query(value="select id,course_id,course_name,coordinator,course_level,status,created_at,updated_at,course_start_date,course_end_date,certificate_issuedate from courses where courses.course_level = ? order by id" , nativeQuery = true )
		List<CourseBatch> findCourseByCourseLevel(String course_level);
		
		
		
		
		
		
		
		//  GET ONLY COURSE NAME AND COURSE LEVEL
		@Query(value="SELECT DISTINCT course_batch.id, course_batch.course_id, course_batch.course_name, course_batch.course_level, course_batch.coordinator, course_batch.course_start_date, course_batch.course_end_date, course_batch.status, course_batch.created_at, course_batch.updated_at FROM course_batch ORDER by course_batch.id" , nativeQuery = true )
		CourseBatch[] getCourseNameAndCourseLevel();
		
		
		
		
		@Query(value="SELECT courses.course_level, modules.module_name, modules.staff_name FROM `courses` INNER JOIN `modules` WHERE courses.id = modules.course_id", nativeQuery=true)
		public List<String> findCoursesModules(Long id);
		
		
		
		
		
		@Query(value="select id,course_id,coordinator, course_name,course_level,staff_name,status,created_at,updated_at,certificate_issuedate,course_start_date,course_end_date from course_batch order by id;", nativeQuery=true)
		public List<CourseBatch> findAllCourses();
		
		
		@Query(value="select count(*) from courses", nativeQuery=true)
		public String countCourses();
		
		
		
		
		// MODULES UNDER EACH COURSE
		
		@Query(value="select modules.module_name, modules.module_start_date, modules.module_end_date from  modules inner join courses on modules.course_id = courses.id where modules.course_id = courses.id and courses.id = ? GROUP by modules.module_name order by modules.module_name", nativeQuery=true)
		public Long allModulesUnderEachCourse(Long id);
		
		
		
		
		
		
		
		// TOTAL NUMBER OF MODULES UNDER EACH COURSE
		
		@Query(value="select count(modules.module_name) from  modules inner join courses on modules.course_id = courses.id where modules.course_id = courses.id and courses.id = ? GROUP by modules.module_name", nativeQuery=true)
		public Long totalNumberOfModulesUnderEachCourse(Long id);
		
		
		
		
		
		//  STUDENTS UNDER EACH COURSE
		
		@Query(value="select count(students.name) from students inner join courses on students.course_id = courses.id where students.course_id = courses.id and courses.id = ? GROUP by courses.id order by courses.id", nativeQuery=true)
		public Long totalNumberOfStudentsUnderEachCourse(Long id);

	
	
	
	
	
	
	
	
	

}
