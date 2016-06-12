<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c87de4d8e6686f86cac93fe8d9df598dd57998ab64a5ca48666e5cef81b22526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74de35d29ba126b57df09bd313cfddcdf79695e4ebc959fd864f7b5e0ed90e8b = $this->env->getExtension("native_profiler");
        $__internal_74de35d29ba126b57df09bd313cfddcdf79695e4ebc959fd864f7b5e0ed90e8b->enter($__internal_74de35d29ba126b57df09bd313cfddcdf79695e4ebc959fd864f7b5e0ed90e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74de35d29ba126b57df09bd313cfddcdf79695e4ebc959fd864f7b5e0ed90e8b->leave($__internal_74de35d29ba126b57df09bd313cfddcdf79695e4ebc959fd864f7b5e0ed90e8b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ad051367d811739ef16b58631f8e8b6527f4200a0ef22d7edca37bfd35d9d42 = $this->env->getExtension("native_profiler");
        $__internal_7ad051367d811739ef16b58631f8e8b6527f4200a0ef22d7edca37bfd35d9d42->enter($__internal_7ad051367d811739ef16b58631f8e8b6527f4200a0ef22d7edca37bfd35d9d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7ad051367d811739ef16b58631f8e8b6527f4200a0ef22d7edca37bfd35d9d42->leave($__internal_7ad051367d811739ef16b58631f8e8b6527f4200a0ef22d7edca37bfd35d9d42_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2c8a838a76f2094c6284d875819b1f3aa3d44c9fb0cef3b21769a46457c20e3 = $this->env->getExtension("native_profiler");
        $__internal_d2c8a838a76f2094c6284d875819b1f3aa3d44c9fb0cef3b21769a46457c20e3->enter($__internal_d2c8a838a76f2094c6284d875819b1f3aa3d44c9fb0cef3b21769a46457c20e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d2c8a838a76f2094c6284d875819b1f3aa3d44c9fb0cef3b21769a46457c20e3->leave($__internal_d2c8a838a76f2094c6284d875819b1f3aa3d44c9fb0cef3b21769a46457c20e3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
