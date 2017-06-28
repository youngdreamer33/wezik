angular.module("components")
.component('postQuestion', {
    
    templateUrl: '/js/components/questions/postQ/formQ.html',
    
    bindings: {
        questions: "<"
    },
    
    controller: ['formService','AuthService', function (formService,AuthService) {
        
        this.$onInit = () => {
            this.user = AuthService.getCurrentUser();
            console.log(this)
            
        }
        
        this.add = () => {
            var submit = {
                title: this.name,
                content: this.body,
                date: new Date(),
                userId: this.user.id,
                likes:0,
                tags: this.selection
            }
            formService.valide(submit);
        };
        
        this.tags = ['JS','PHP','HTML','ANGULARJS','SYMPHONY2'];
        
        this.selection = [];
        
        this.toggleSelection = function toggleSelection(tags) {
            var idx = this.selection.indexOf(tags);
            
            if (idx > -1) {
                this.selection.splice(idx, 1);
            }
            
            else {
                this.selection.push(tags);
                
            }
        };
    }]
    
})