<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_79e0ae89bd2a74e65a21829a77e371eb1fdb0b7b94ec0087fc9e4f557bc5f4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_d601b65e1270104421ed40045bf302361b8f3d5ede1f6b8de53e8f37a2954219 = $this->env->getExtension("native_profiler");
        $__internal_d601b65e1270104421ed40045bf302361b8f3d5ede1f6b8de53e8f37a2954219->enter($__internal_d601b65e1270104421ed40045bf302361b8f3d5ede1f6b8de53e8f37a2954219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d601b65e1270104421ed40045bf302361b8f3d5ede1f6b8de53e8f37a2954219->leave($__internal_d601b65e1270104421ed40045bf302361b8f3d5ede1f6b8de53e8f37a2954219_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8350c7484b5e10a4b86b49e8a1789f3094fcf8452ae80427e34527bd85645952 = $this->env->getExtension("native_profiler");
        $__internal_8350c7484b5e10a4b86b49e8a1789f3094fcf8452ae80427e34527bd85645952->enter($__internal_8350c7484b5e10a4b86b49e8a1789f3094fcf8452ae80427e34527bd85645952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8350c7484b5e10a4b86b49e8a1789f3094fcf8452ae80427e34527bd85645952->leave($__internal_8350c7484b5e10a4b86b49e8a1789f3094fcf8452ae80427e34527bd85645952_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_861877bdb840d53e2e0ec883095a6be0ad3b1fc02bde82dfd7898911ca3e188c = $this->env->getExtension("native_profiler");
        $__internal_861877bdb840d53e2e0ec883095a6be0ad3b1fc02bde82dfd7898911ca3e188c->enter($__internal_861877bdb840d53e2e0ec883095a6be0ad3b1fc02bde82dfd7898911ca3e188c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_861877bdb840d53e2e0ec883095a6be0ad3b1fc02bde82dfd7898911ca3e188c->leave($__internal_861877bdb840d53e2e0ec883095a6be0ad3b1fc02bde82dfd7898911ca3e188c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
