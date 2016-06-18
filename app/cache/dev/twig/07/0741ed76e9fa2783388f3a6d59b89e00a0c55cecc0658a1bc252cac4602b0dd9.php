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
        $__internal_7b3c63a4933176e8c9b16a815adb6624e14a0a3ceaa9d7b44eef21fbd09e2031 = $this->env->getExtension("native_profiler");
        $__internal_7b3c63a4933176e8c9b16a815adb6624e14a0a3ceaa9d7b44eef21fbd09e2031->enter($__internal_7b3c63a4933176e8c9b16a815adb6624e14a0a3ceaa9d7b44eef21fbd09e2031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b3c63a4933176e8c9b16a815adb6624e14a0a3ceaa9d7b44eef21fbd09e2031->leave($__internal_7b3c63a4933176e8c9b16a815adb6624e14a0a3ceaa9d7b44eef21fbd09e2031_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_efe3d51a5f6ed037756ef44476274e2d0896bd4a02276f65e86c42437464cfd3 = $this->env->getExtension("native_profiler");
        $__internal_efe3d51a5f6ed037756ef44476274e2d0896bd4a02276f65e86c42437464cfd3->enter($__internal_efe3d51a5f6ed037756ef44476274e2d0896bd4a02276f65e86c42437464cfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_efe3d51a5f6ed037756ef44476274e2d0896bd4a02276f65e86c42437464cfd3->leave($__internal_efe3d51a5f6ed037756ef44476274e2d0896bd4a02276f65e86c42437464cfd3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf708fa89ae2d57d6b157abfaec42946d80ca4914753dbf9eee6c177401564ca = $this->env->getExtension("native_profiler");
        $__internal_cf708fa89ae2d57d6b157abfaec42946d80ca4914753dbf9eee6c177401564ca->enter($__internal_cf708fa89ae2d57d6b157abfaec42946d80ca4914753dbf9eee6c177401564ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf708fa89ae2d57d6b157abfaec42946d80ca4914753dbf9eee6c177401564ca->leave($__internal_cf708fa89ae2d57d6b157abfaec42946d80ca4914753dbf9eee6c177401564ca_prof);

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
