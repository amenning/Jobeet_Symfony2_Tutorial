<?php

/* base.html.twig */
class __TwigTemplate_3c7c0f9dba0efffe9bfa4a8d04b09769c8ce1b0f37ddc8df317c0b0faf985f34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35b101ef6c78758d97876dc4474428b164d03adee5aa4246eeeddf7245f3e5c3 = $this->env->getExtension("native_profiler");
        $__internal_35b101ef6c78758d97876dc4474428b164d03adee5aa4246eeeddf7245f3e5c3->enter($__internal_35b101ef6c78758d97876dc4474428b164d03adee5aa4246eeeddf7245f3e5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_35b101ef6c78758d97876dc4474428b164d03adee5aa4246eeeddf7245f3e5c3->leave($__internal_35b101ef6c78758d97876dc4474428b164d03adee5aa4246eeeddf7245f3e5c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bec9ef6d09d948341476ec9bff0ef8fb81bb4e2a1249ad6de2d918e5f2b1ebf2 = $this->env->getExtension("native_profiler");
        $__internal_bec9ef6d09d948341476ec9bff0ef8fb81bb4e2a1249ad6de2d918e5f2b1ebf2->enter($__internal_bec9ef6d09d948341476ec9bff0ef8fb81bb4e2a1249ad6de2d918e5f2b1ebf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bec9ef6d09d948341476ec9bff0ef8fb81bb4e2a1249ad6de2d918e5f2b1ebf2->leave($__internal_bec9ef6d09d948341476ec9bff0ef8fb81bb4e2a1249ad6de2d918e5f2b1ebf2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d74a3c96d79edad429de3b99fbf28e21e31975febe783b76eee4acf005a17e87 = $this->env->getExtension("native_profiler");
        $__internal_d74a3c96d79edad429de3b99fbf28e21e31975febe783b76eee4acf005a17e87->enter($__internal_d74a3c96d79edad429de3b99fbf28e21e31975febe783b76eee4acf005a17e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d74a3c96d79edad429de3b99fbf28e21e31975febe783b76eee4acf005a17e87->leave($__internal_d74a3c96d79edad429de3b99fbf28e21e31975febe783b76eee4acf005a17e87_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_42795e2ef56f3798131b8f4613ef1019cf412957c506c74a4e21c98a1eaece13 = $this->env->getExtension("native_profiler");
        $__internal_42795e2ef56f3798131b8f4613ef1019cf412957c506c74a4e21c98a1eaece13->enter($__internal_42795e2ef56f3798131b8f4613ef1019cf412957c506c74a4e21c98a1eaece13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_42795e2ef56f3798131b8f4613ef1019cf412957c506c74a4e21c98a1eaece13->leave($__internal_42795e2ef56f3798131b8f4613ef1019cf412957c506c74a4e21c98a1eaece13_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5aac8f047a21206cda45e131a837be700108a927ed1561eb4784505a2d16bd06 = $this->env->getExtension("native_profiler");
        $__internal_5aac8f047a21206cda45e131a837be700108a927ed1561eb4784505a2d16bd06->enter($__internal_5aac8f047a21206cda45e131a837be700108a927ed1561eb4784505a2d16bd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5aac8f047a21206cda45e131a837be700108a927ed1561eb4784505a2d16bd06->leave($__internal_5aac8f047a21206cda45e131a837be700108a927ed1561eb4784505a2d16bd06_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
