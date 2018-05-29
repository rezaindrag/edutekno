// Constants
const { Component } = React;
const URL = 'http://localhost:8000';

Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};

// Level
class Level extends Component {
	render() {
		return (
			<div className="search-attrs mb-4">
				<ul className="list-group list-group-flush">
					<li className="list-group-item bg-light text-secondary pb-1 title-attrs">Level</li>
					<li className="list-group-item">
						<div className="custom-control custom-checkbox">
							<input 
								type="checkbox" 
								className="custom-control-input" 
								id="beginner" 
								value="beginner"
								name="level"
								onChange={this.props.onChecked}
							/>
							<label className="custom-control-label ml-1" for="beginner">Beginner</label>
						</div>
					</li>
					<li className="list-group-item">
						<div className="custom-control custom-checkbox">
							<input 
								type="checkbox" 
								className="custom-control-input" 
								id="intermediate" 
								name="level"
								value="intermediate"
								onChange={this.props.onChecked}
							/>
							<label className="custom-control-label ml-1" for="intermediate">Intermediate</label>
						</div>
					</li>
					<li className="list-group-item">
						<div className="custom-control custom-checkbox">
							<input 
								type="checkbox" 
								className="custom-control-input" 
								id="advanced" 
								name="level"
								value="advanced"
								onChange={this.props.onChecked}
							/>
							<label className="custom-control-label ml-1" for="advanced">Advanced</label>
						</div>
					</li>
				</ul>
			</div>
		);
	}
}

// Topic
class Topic extends Component {
	constructor(props) {
		super(props);
		this.state = {
			technologies: []
		}
	}

	componentWillMount() {
		axios.get(URL+'/api/categories?type=topic').then(response => {
			this.setState({ technologies: response.data.data });
		}).catch(function (error) {
			console.log(error);
		});
	}

	get list() {
		let { technologies } = this.state;
		let list = technologies.map(({ name, slug, id }) => 
			<li className="list-group-item" key={id}>
				<div className="custom-control custom-checkbox">
					<input 
						type="checkbox" 
						className="custom-control-input" 
						name="topic"
						id={`customCheck${id}`}
						value={slug}
						onChange={this.props.onChecked}
					/>
					<label className="custom-control-label ml-1" for={`customCheck${id}`}>{ name }</label>
				</div>
			</li>
		);

		return (
			<div className="search-attrs mb-4">
				<ul className="list-group list-group-flush">
					<li className="list-group-item bg-light text-secondary pb-1 title-attrs">Topik</li>
					{ list }
				</ul>
			</div>
		);
	}

	render() {
		return this.list
	}
}

// Software
class Software extends Component {
	constructor(props) {
		super(props);
		this.state = {
			technologies: []
		}
	}

	componentWillMount() {
		axios.get(URL+'/api/categories?type=software').then(response => {
			this.setState({ technologies: response.data.data });
		}).catch(function (error) {
			console.log(error);
		});
	}

	get list() {
		let { technologies } = this.state;
		let list = technologies.map(({ name, slug, id }) => 
			<li className="list-group-item" key={id}>
				<div className="custom-control custom-checkbox">
					<input 
						type="checkbox" 
						className="custom-control-input" 
						id={`customCheck${id}`}
						name="software"
						value={slug}
						onChange={this.props.onChecked}
					/>
					<label className="custom-control-label ml-1" for={`customCheck${id}`}>{ name }</label>
				</div>
			</li>
		);

		return (
			<div className="search-attrs mb-4">
				<ul className="list-group list-group-flush">
					<li className="list-group-item bg-light text-secondary pb-1 title-attrs">Software</li>
					{ list }
				</ul>
			</div>
		);
	}

	render() {
		return this.list
	}
}

// Filter
class Filter extends Component {
	render() {
		return (
			<div className="col-md-3">
				<Level onChecked={this.props.onChecked} />
				<Topic onChecked={this.props.onChecked} />
				<Software onChecked={this.props.onChecked} />
			</div>
		);
	}
}

// List of courses
class CourseList extends Component {
	constructor(props) {
		super(props);
		this.openUrl = this.openUrl.bind(this);
	}

	openUrl(slug) {
		console.log('tes');
		//window.location.href=`${URL}/${slug}`;
	}

	get list() {
		let { courses } = this.props;
		let cards = courses.map(({ title, slug, total_lessons, total_duration, banner, topics, software }, i) =>
			<div onClick={this.openUrl(slug)} className="card post-container mb-3" style={{ width: '263px' }} key={i}>
				<img className="post-thumb" src={ banner } alt="" />
				<div className="card-body d-flex flex-column justify-content-between">
					<a href="" className="course-title text-dark mb-2">{ title }</a>
					<p className="post-attrs mb-2">
						<span className="mr-2">{ total_lessons } Lessons</span>
						<span>{ total_duration }</span>
					</p>
					<p className="post-attrs mb-2">
						Topik: { topics.toString() }
					</p>
					<p className="post-attrs mb-2">
						Software: { software.toString() }
					</p>
				</div>
			</div>
		);

		return (
			<div className="d-flex flex-wrap flex-row justify-content-between">
				{ cards }
				<div style={{ width: '263px' }}></div>
			</div>
		);
	}

	render() {
		return this.list
	}
}

// Courses container
class Courses extends Component {
	constructor(props) {
		super(props);
		this.state = {
			courses: [],
			levels: [],
			topics: [],
			software: []
		}
		this.onSearch = this.onSearch.bind(this);
		this.onChecked = this.onChecked.bind(this);
	}

	componentWillMount() {
		axios.get(URL+'/api/courses').then(response => {
			this.setState({ courses: response.data.data });
		}).catch(function (error) {
			console.log(error);
		});
	}

	onSearch(e) {
		let keyword = e.target.value;

		axios.get(URL+'/api/courses?keyword='+keyword).then(response => {
			this.setState({ courses: response.data.data });
		}).catch(function (error) {
			console.log(error);
		});
	}

	onChecked(e) {
		let levels = this.state.levels,
			topics = this.state.topics,
			software = this.state.software,
			isChecked = e.target.checked,
			value = e.target.value,
			name = e.target.name;

		if (name == 'level') {
			if (isChecked == true) {
				levels.push(value);
			} else {
				levels.remove(value);
			}
		} else
		
		if (name == 'topic') {
			if (isChecked == true) {
				topics.push(value);
			} else {
				topics.remove(value);
			}
		} else

		if (name == 'software') {
			if (isChecked == true) {
				software.push(value);
			} else {
				software.remove(value);
			}
		}

		levels = levels.filter(function(key, value) {
			return levels.indexOf(key) == value;
		});

		topics = topics.filter(function(key, value) {
			return topics.indexOf(key) == value;
		});

		software = software.filter(function(key, value) {
			return software.indexOf(key) == value;
		});

		let queryStringUrl = '';
			queryStringUrl += 'levels='+levels.toString();
			queryStringUrl += '&topics='+topics.toString();
			queryStringUrl += '&software='+software.toString();

		// console.log(queryStringUrl);

		axios.get(URL+'/api/courses?'+queryStringUrl).then(response => {
			this.setState({ courses: response.data.data });
		}).catch(function (error) {
			console.log(error);
		});

		this.setState({ levels, topics, software });
	}

	render() {
		return (
			<div className="row courses">
				<div className="col-md-12">
					<div className="row mb-4">
						<div className="col-md-6 d-flex align-items-center">
							<h4 className="m-0 p-0">Cari Kursus &amp; Tutorial</h4>
						</div>
						<div className="col-md-6">
							<div class="input-group">
								<input type="text" onChange={this.onSearch} class="form-control" placeholder="Apa yang akan kamu pelajari?" aria-label="" aria-describedby="basic-addon1" />
								<div class="input-group-append">
									<button class="btn btn-link text-dark bg-white btn-search" type="button"><i class="fas fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div className="row">
						<Filter 
							onSearch={this.onSearch}
							onChecked={this.onChecked}
						/>
						<div className="col-md-9">
							<CourseList courses={this.state.courses} />
						</div>
					</div>
				</div>
			</div>
		);
	}
}

ReactDOM.render(<Courses />, document.getElementById('courses'));
	