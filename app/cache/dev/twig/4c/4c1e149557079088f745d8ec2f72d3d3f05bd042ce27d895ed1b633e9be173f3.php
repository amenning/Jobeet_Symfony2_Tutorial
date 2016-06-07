<?php

/* job/index.html.twig */
class __TwigTemplate_c4d5dad35dffdbd96fcefdf2bbddab536a7dc5a01aafdac7946b2a376e9f0006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad4aa01f834fc4e0fdb6db7aabb29d02afcd57336daf78ab6293148e57c4526c = $this->env->getExtension("native_profiler");
        $__internal_ad4aa01f834fc4e0fdb6db7aabb29d02afcd57336daf78ab6293148e57c4526c->enter($__internal_ad4aa01f834fc4e0fdb6db7aabb29d02afcd57336daf78ab6293148e57c4526c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad4aa01f834fc4e0fdb6db7aabb29d02afcd57336daf78ab6293148e57c4526c->leave($__internal_ad4aa01f834fc4e0fdb6db7aabb29d02afcd57336daf78ab6293148e57c4526c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ffa8f73b4c3c8a4b047e6060c28dd07e783aa5a7d1efc21cf9dc98161a0c6e3f = $this->env->getExtension("native_profiler");
        $__internal_ffa8f73b4c3c8a4b047e6060c28dd07e783aa5a7d1efc21cf9dc98161a0c6e3f->enter($__internal_ffa8f73b4c3c8a4b047e6060c28dd07e783aa5a7d1efc21cf9dc98161a0c6e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ffa8f73b4c3c8a4b047e6060c28dd07e783aa5a7d1efc21cf9dc98161a0c6e3f->leave($__internal_ffa8f73b4c3c8a4b047e6060c28dd07e783aa5a7d1efc21cf9dc98161a0c6e3f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ad2dcc97139552599ce6d88af2ad913fba154fc32b77a760ec67c66eabe5c87 = $this->env->getExtension("native_profiler");
        $__internal_7ad2dcc97139552599ce6d88af2ad913fba154fc32b77a760ec67c66eabe5c87->enter($__internal_7ad2dcc97139552599ce6d88af2ad913fba154fc32b77a760ec67c66eabe5c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div id=\"jobs\">
      <table class=\"jobs\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 12
            echo "          <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
            <td class=\"location\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</td>
            <td class=\"position\">
              <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($context["job"], "id", array()), "company" => $this->getAttribute($context["job"], "company", array()), "location" => $this->getAttribute($context["job"], "location", array()), "position" => $this->getAttribute($context["job"], "position", array()))), "html", null, true);
            echo "\">
                ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo "
              </a>
            </td>
            <td class=\"company\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
            echo "</td>
          </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      </table>
    </div>
";
        
        $__internal_7ad2dcc97139552599ce6d88af2ad913fba154fc32b77a760ec67c66eabe5c87->leave($__internal_7ad2dcc97139552599ce6d88af2ad913fba154fc32b77a760ec67c66eabe5c87_prof);

    }

    public function getTemplateName()
    {
        return "job/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 22,  102 => 19,  96 => 16,  92 => 15,  87 => 13,  82 => 12,  65 => 11,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="jobs">*/
/*       <table class="jobs">*/
/*         {% for job in jobs %}*/
/*           <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*             <td class="location">{{ job.location }}</td>*/
/*             <td class="position">*/
/*               <a href="{{ path('ens_job_show', { 'id': job.id, 'company' : job.company, 'location': job.location, 'position': job.position }) }}">*/
/*                 {{ job.position }}*/
/*               </a>*/
/*             </td>*/
/*             <td class="company">{{ job.company }}</td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </div>*/
/* {% endblock %}*/
/* */
