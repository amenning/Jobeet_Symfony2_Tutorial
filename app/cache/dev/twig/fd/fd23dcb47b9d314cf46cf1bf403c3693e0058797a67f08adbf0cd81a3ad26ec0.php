<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b8693eb806b3b66d5de21741ec3597634f91b97306671084859ad7e5d4751996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ab125ea55f7329a44788fece015388a109da5f4db9e562788aabb4efe319bd9 = $this->env->getExtension("native_profiler");
        $__internal_3ab125ea55f7329a44788fece015388a109da5f4db9e562788aabb4efe319bd9->enter($__internal_3ab125ea55f7329a44788fece015388a109da5f4db9e562788aabb4efe319bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ab125ea55f7329a44788fece015388a109da5f4db9e562788aabb4efe319bd9->leave($__internal_3ab125ea55f7329a44788fece015388a109da5f4db9e562788aabb4efe319bd9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe6832ec42747fabf64dc56daf74bdee0eae6c5f55588031939bf40f967bd71a = $this->env->getExtension("native_profiler");
        $__internal_fe6832ec42747fabf64dc56daf74bdee0eae6c5f55588031939bf40f967bd71a->enter($__internal_fe6832ec42747fabf64dc56daf74bdee0eae6c5f55588031939bf40f967bd71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe6832ec42747fabf64dc56daf74bdee0eae6c5f55588031939bf40f967bd71a->leave($__internal_fe6832ec42747fabf64dc56daf74bdee0eae6c5f55588031939bf40f967bd71a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77781fd3deebbdd8070e867830cf24bb33829e52838193897542ae646d541174 = $this->env->getExtension("native_profiler");
        $__internal_77781fd3deebbdd8070e867830cf24bb33829e52838193897542ae646d541174->enter($__internal_77781fd3deebbdd8070e867830cf24bb33829e52838193897542ae646d541174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_77781fd3deebbdd8070e867830cf24bb33829e52838193897542ae646d541174->leave($__internal_77781fd3deebbdd8070e867830cf24bb33829e52838193897542ae646d541174_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17144c928665fb6a5b1341b2a7001ca1a1ff7acefec3aea8c6333c9977bcc658 = $this->env->getExtension("native_profiler");
        $__internal_17144c928665fb6a5b1341b2a7001ca1a1ff7acefec3aea8c6333c9977bcc658->enter($__internal_17144c928665fb6a5b1341b2a7001ca1a1ff7acefec3aea8c6333c9977bcc658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_17144c928665fb6a5b1341b2a7001ca1a1ff7acefec3aea8c6333c9977bcc658->leave($__internal_17144c928665fb6a5b1341b2a7001ca1a1ff7acefec3aea8c6333c9977bcc658_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
