<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9070871fd559bba25e49457e0cba38462f72698cd9a825d67a43b21ecf92665f extends Twig_Template
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
        $__internal_73b95cd237ab93fa083aa888edf51b13ef38935d56d96379a87241b5cef9ab04 = $this->env->getExtension("native_profiler");
        $__internal_73b95cd237ab93fa083aa888edf51b13ef38935d56d96379a87241b5cef9ab04->enter($__internal_73b95cd237ab93fa083aa888edf51b13ef38935d56d96379a87241b5cef9ab04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73b95cd237ab93fa083aa888edf51b13ef38935d56d96379a87241b5cef9ab04->leave($__internal_73b95cd237ab93fa083aa888edf51b13ef38935d56d96379a87241b5cef9ab04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_32a356aa5ef3666b9e1921cb794d84a14ec33f09aa9490210956f68d1b96036a = $this->env->getExtension("native_profiler");
        $__internal_32a356aa5ef3666b9e1921cb794d84a14ec33f09aa9490210956f68d1b96036a->enter($__internal_32a356aa5ef3666b9e1921cb794d84a14ec33f09aa9490210956f68d1b96036a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_32a356aa5ef3666b9e1921cb794d84a14ec33f09aa9490210956f68d1b96036a->leave($__internal_32a356aa5ef3666b9e1921cb794d84a14ec33f09aa9490210956f68d1b96036a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e235b19699469a566fc651dd32591bccc9318ec439c9139f0cc315f5c52c13d = $this->env->getExtension("native_profiler");
        $__internal_3e235b19699469a566fc651dd32591bccc9318ec439c9139f0cc315f5c52c13d->enter($__internal_3e235b19699469a566fc651dd32591bccc9318ec439c9139f0cc315f5c52c13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3e235b19699469a566fc651dd32591bccc9318ec439c9139f0cc315f5c52c13d->leave($__internal_3e235b19699469a566fc651dd32591bccc9318ec439c9139f0cc315f5c52c13d_prof);

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
