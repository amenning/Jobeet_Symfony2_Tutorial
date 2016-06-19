<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7b2fac19d7fe51da01dd02ce1174ecbc84d4d2292dc1ec8e5644eca9ffa489e4 extends Twig_Template
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
        $__internal_929acb7e444156115b5bd3275e633360f5ebe5653e0fef7894fc16b23673b580 = $this->env->getExtension("native_profiler");
        $__internal_929acb7e444156115b5bd3275e633360f5ebe5653e0fef7894fc16b23673b580->enter($__internal_929acb7e444156115b5bd3275e633360f5ebe5653e0fef7894fc16b23673b580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_929acb7e444156115b5bd3275e633360f5ebe5653e0fef7894fc16b23673b580->leave($__internal_929acb7e444156115b5bd3275e633360f5ebe5653e0fef7894fc16b23673b580_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b4c211a66a865b0d0adae3aa075d47fba01384ef03d5b1c6c5fcc19c9af3b5c = $this->env->getExtension("native_profiler");
        $__internal_7b4c211a66a865b0d0adae3aa075d47fba01384ef03d5b1c6c5fcc19c9af3b5c->enter($__internal_7b4c211a66a865b0d0adae3aa075d47fba01384ef03d5b1c6c5fcc19c9af3b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7b4c211a66a865b0d0adae3aa075d47fba01384ef03d5b1c6c5fcc19c9af3b5c->leave($__internal_7b4c211a66a865b0d0adae3aa075d47fba01384ef03d5b1c6c5fcc19c9af3b5c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_616d75b80a47d94a1f1b42481e4a355ba8f7fbb336292d39b78000a2bb46188e = $this->env->getExtension("native_profiler");
        $__internal_616d75b80a47d94a1f1b42481e4a355ba8f7fbb336292d39b78000a2bb46188e->enter($__internal_616d75b80a47d94a1f1b42481e4a355ba8f7fbb336292d39b78000a2bb46188e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_616d75b80a47d94a1f1b42481e4a355ba8f7fbb336292d39b78000a2bb46188e->leave($__internal_616d75b80a47d94a1f1b42481e4a355ba8f7fbb336292d39b78000a2bb46188e_prof);

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
